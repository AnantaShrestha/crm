<?php

namespace App\Http\Controllers;
//use App\Batch;
use App\Repositories\StudentRepository;
use App\Student;
use App\Course;

use App\User;
use App\Country;

use PDF;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{

    public function viewAllStudent(){

        $student=Student::where('status',0)->get();

        return view('admin.student.view',compact('student'));

    }

    public function addStudent(Request $request){

        if(\Gate::denies('admin_staff')){
            abort(403, 'Access Denied');
        }
        ini_set('memory_limit','256M');
        $courses=Course::latest()->get();
           /* $category=StudentCategory::latest()->get();
            $section=Section::latest()->get();
            $batch=Batch::latest()->get();*/

            if ($request->isMethod('post')) {
                $request->validate([
                    'fname' => 'required|string|max:50',
                    'lname' => 'required|string|max:50',
                    'gender'=>'required',
                    'email'=>'required',
                    'dob'=>'required',
                    'phone' => 'required',
                    'customer_type'=>'required',
                    'image' => 'mimes:jpg,png,jpeg',
                ]);

                $data = $request->all();

                // dd($data);


                $course=$data['course_id'];

                $student = new Student;
                $student->fname = $data['fname'];
                $student->lname = $data['lname'];
                $student->gender = $data['gender'];
                $student->email = strtolower($data['email']);
                $student->address = $data['address'];
                $student->address2 = $data['address2'];
                $student->phone = $data['phone'];
                $student->mobile=$data['mobile'];
                $student->dob=$data['dob'];
                $student->city=$data['city'];
                $student->customer_type=$data['customer_type'];
                $student->password = Hash::make('password@123');
                $student->status=0;
                $random = str_random(20);
                if ($request->hasFile('image')) {
                    $image_tmp = Input::file('image');
                    if ($image_tmp->isValid()) {
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename = $random . '.' . $extension;
                        $image_path = 'uploads/profile/' . $filename;
                        // Resize Image Code
                        Image::make($image_tmp)->save($image_path);
                        // Store image name in products table
                        $student->image = $filename;
                    }
                }
                if(isset($data['usercheck'])){

                    $student->ifuser="1";
                    $user = new User;
                    $user->name = $data['fname'] . $data['lname'];
                    $user->email = strtolower($data['email']);
                    $user->address = $data['address'];
                    $user->phone = $data['phone'];
                    $user->role_id = 3;
                    $user->password = Hash::make('password@123');
                    if(!empty($userfilename)) {
                        $user->image = $filename;
                    };

                    $user->save();

                }
                $student->ifuser="0";
                $student->save();
                $course_id=$data['course_id'];
                $student->courses()->attach($course_id);
                return redirect()->route('viewStudent')->with('flash_message', 'New Customer Has Been Added');

            }
            $districts=$this->districts();
            return view('admin.student.add',compact('courses','districts'));

        }

        public  function trashStudent($id){

            if(\Gate::denies('admin_staff')){
                abort(403, 'Access Denied');
            }

            $student=Student::findOrfail($id);
       /* $studentmail=$student->email;
        $useremail=User::where('email',$studentmail)->first();
        $usercount=User::where('email',$studentmail)->count();*/
        $student->delete();
        if (($usercount)>0) {
            $useremail->forceDelete();
        }
        $student->delete();
        /*       $useremail->forceDelete();*/
        return redirect()->route('viewStudent')->with('flash_message', 'Customer Has Been Deactivated');

    }

    public  function viewTrashedStudent(){

        $student=Student::onlyTrashed()->latest()->get();
        return view('admin.student.view',compact('student'))->with('trashed','true');

    }

    // Restore Teacher
    public function restoreStudent($id){
        $student = Student::onlyTrashed()->where('id', $id)->first();
        $student->restore();
        return redirect()->route('viewStudent')->with('flash_message', 'Customer Has Been Restored');
    }

    // Delete Teacher
    public function deleteStudent($id){
        if(\Gate::denies('admin')){
            abort(403, 'Access Denied');
        }
        $student = Student::onlyTrashed()->where('id', $id)->first();

        $student->forceDelete();
        $image_path = 'public/uploads/profile/';

        if(!empty($student->image)){
            if(file_exists($image_path.$student->image)){
                unlink($image_path.$student->image);
            }
        }
        return redirect()->back()->with('flash_message', 'Customer Has Been Deleted');
    }

    // Edit & Update Teacher
    public function editStudent(Request $request, $id){
       ini_set('memory_limit','256M');


       $student = Student::findOrFail($id);
       $courses=Course::latest()->get();
       $course_student = $student->courses()->pluck('course_id')->toArray();

       if ($request->isMethod('post')) {
        $request->validate([
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'gender'=>'required',
            'email'=>'required',
            'dob'=>'required',
            'customer_type'=>'required',
            'phone' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        $data = $request->all();

            // dd($data);

        $student->fname = $data['fname'];
        $student->lname = $data['lname'];
        $student->gender = $data['gender'];
        $studentemail=strtolower($data['email']);
        $student->email =  $studentemail;
        $student->address = $data['address'];
        $student->phone = $data['phone'];
        $student->phone = $data['mobile'];

        $student->dob=$data['dob'];
        $student->customer_type=$data['customer_type'];



        $student->password = Hash::make('password@123');

        $random = str_random(20);

        if ($request->hasFile('image')) {
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;

                $image_path = 'uploads/profile/' . $filename;
                    // Resize Image Code
                Image::make($image_tmp)->save($image_path);
                    // Store image name in products table
                $student->image = $filename;
            }

        }

        if(isset($data['usercheck'])){


            $student->ifuser="1";
            $userlist=User::where('email',$studentemail)->count();



            if($userlist==0){


             $user = new User;
             $user->name = $data['fname'] . $data['lname'];
             $user->email = strtolower($data['email']);
             $user->address = $data['address'];
             $user->phone = $data['phone'];
             $user->role_id = 4;
             $user->password = Hash::make('password@123');

             if(!empty($filename)) {
                 $user->image=$filename;
             };

             $user->save();
         }
         else{

             $useredit=User::where('email',$studentemail)->first();
             $useredit->name = $data['fname'] . $data['lname'];
             $useredit->email = strtolower($data['email']);
             $useredit->address = $data['address'];
             $useredit->phone = $data['phone'];
             if(!empty($filename)) {
                 $useredit->image = $filename;
             };
             $useredit->save();

         }
     }
     else{
        $student->ifuser="0";           
        $stdeml=$student->email;
        $user = User::where('email',$stdeml);
        $user->forcedelete();

    }      


    $student->save();

    $course_id=$data['course_id'];
    $student->courses()->sync($course_id);


    $image_path = 'uploads/profile/';

    if (file_exists($image_path.$data['current_image'])){

        if(!empty($data['current_image'])){
            if (file_exists($image_path.$student->image)){
                unlink($image_path.$data['current_image']);
            }
        }
    }

    return redirect()->route('viewStudent')->with('flash_message', 'Customers Details Has Been Updated');
}
$districts=$this->districts();

return view ('admin.student.edit', compact('courses','student','course_student','districts'));
}



public function generatePDF(){

   $data['student'] = Student::all();

   $pdf = \PDF::loadView('admin.student.pdf', compact('data'));

   $pdf->save(storage_path().'_filename.pdf');

   return $pdf->download('Customerlist.pdf');


}


public function myprofile(){
    if(\Gate::denies('student')){
        abort(403, 'Access Denied');
    }
    $user = User::findOrFail(Auth::user()->id);
        // dd($user);
    $student_email = Session::get('adminSession');
        // dd($teacher_email);
    $user_email = $user->email;
        // dd($user_email);
    if($user_email == $student_email ){
        $student_id = Student::where('email', $student_email)->first();
            // dd($teacher_id->id);

            // dd($te_id);
        $student=Student::findorFail($student_id->id);

        $student_course=$student->courses;

        //    dd($teachers);
        $course_student= $student->courses->sortBy('name')->pluck('id');
        foreach($student_course as $course){
            // dd($course->id);

        // dd($result[0]);
            $shift=$student->batches->shifts;

            return view('admin.student.profile',compact('student','course_student'));
        }

    }
}

        //print Student
public function printStudent(){
    $data['students']=Student::all();
    return view('admin.student.print',$data);
}

protected function districts()
{
    return \DB::table('districts')->get();
}




}


