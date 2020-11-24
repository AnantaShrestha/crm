<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\Course;
use Image;

class VendorController extends Controller
{
	public function __construct()
	{
		$this->vendor=new Vendor();
		$this->course=new Course();
	}

	public function index()
	{
		$vendors=$this->vendor->latest()->get();

		return view('admin.vendorsupplier.index',compact('vendors'));
	}

	public function create()
	{
		$courses=$this->getCourse();
		return view('admin.vendorsupplier.form',compact('courses'));
	}

	public function store(Request $request)
	{
		if(\Gate::denies('admin_staff')){
			abort(403, 'Access Denied');
		}
		$data=$request->except('course_id');
		$data['password']=\Hash::make('password@123');
		$random = str_random(20);
		if ($request->hasFile('image')) {
			$image_tmp = Input::file('image');
			if ($image_tmp->isValid()) {
				$extension = $image_tmp->getClientOriginalExtension();
				$filename = $random . '.' . $extension;
				$image_path = 'uploads/vendor/' . $filename;
                        // Resize Image Code
				Image::make($image_tmp)->save($image_path);
                        // Store image name in products table
				$image = $filename;
			}
		}
		$vendor=$this->vendor->createVendor($data);
		$vendor->courses()->attach($request['course_id']);
		return redirect()->route('vendor.index')->with('flash_message','Create Successfully');
	}

	public function edit(Vendor $vendor)
	{
		$courses=$this->getCourse();
        $course_vendor = $vendor->courses()->pluck('course_id')->toArray();
		return view('admin.vendorsupplier.form',compact('vendor','courses','course_vendor'));
	}


	public function update(Request $request,Vendor $vendor)
	{
		$data=$request->except('_token','_method','course_id');
		if ($request->hasFile('image')) {
			$image_tmp = Input::file('image');
			if ($image_tmp->isValid()) {
				$extension = $image_tmp->getClientOriginalExtension();
				$filename = $random . '.' . $extension;
				$image_path = 'uploads/vendor/' . $filename;
                        // Resize Image Code
				Image::make($image_tmp)->save($image_path);
                        // Store image name in products table
				$data['image'] = $filename;
			}
			 if (file_exists('uploads/vendor/'.$vendor->image)){

                if(!empty($vendor->image)){
                    if (file_exists('uploads/vendor/'.$vendor->image)){
                        unlink('uploads/vendor/'.$vendor->image);
                    }
                }
            }
		}
		$vendor->update($data);
        $vendor->courses()->sync($request->course_id);
		return redirect()->route('vendor.index')->with('flash_message','Update Successfully');
	}

	public function trash(Vendor $vendor)
	{
		$vendor->delete();
		return redirect()->route('vendor.index')->with('flash_error','Vendor has been sent to recycle bin Successfully');

	}

	public function viewtrash()
	{
		 $vendors=Vendor::onlyTrashed()->latest()->get();
        return view('admin.vendorsupplier.index',compact('vendors'))->with('trashed','true');
	}

	public function restore($vendor){
        $vendor = Vendor::onlyTrashed()->where('id', $vendor)->first();
        $vendor->restore();
        return redirect()->route('vendor.index')->with('flash_message', 'Vendor/Suppliers Has Been Restored');
    }

    public function delete($id)
    {
    	 if(\Gate::denies('admin')){
            abort(403, 'Access Denied');
        }
        $vendor = Vendor::onlyTrashed()->where('id', $id)->first();

        $vendor->forceDelete();
        $image_path = 'uploads/vendor/';

        if(!empty($vendor->image)){
            if(file_exists($image_path.$vendor->image)){
                unlink($image_path.$vendor->image);
            }
        }
        return redirect()->route('vendor.index')->with('flash_message', 'Vendor Has Been Deleted');
    }

	protected function getCourse()
	{
		return $this->course->get();
	}
}
