<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff;
use App\Level;
use App\Department;
use App\Designation;
use Image;
class StaffController extends Controller
{
    function index()
    {
        $data = Staff::all();
        return view("admin.staff.view", compact("data"));
    }
    function create()
    {
        $level = Level::latest()->get();
        $departments=Department::get();
        $designations=Designation::get();

        $districts=$this->district();
        return view("admin.staff.add", compact('level','districts','departments','designations'));
    }
    function store(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        $data = $request->except("confirm_password");
        if ($request->hasFile('pp_photo')) {
            $pp_photo = $request->pp_photo;
            $originalname = $request->pp_photo->getClientOriginalName();
            $uniquename = rand() . $originalname;
            $data['pp_photo'] = $uniquename;
            $path = public_path('images/staff');
            $pp_photo->move($path, $uniquename);
        }

        Staff::create($data);
        return redirect()->route('view_staff')->with('flash_message', 'Staff Created successfully');
    }
    function edit($id)
    {
        $data = Staff::findOrfail($id);
        $level = Level::latest()->get();
        $departments=Department::get();
        $designations=Designation::get();
        $districts=$this->district();

        return view("admin.staff.edit", compact("data", 'level','districts','departments','designations'));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        $data = $request->except("confirm_password", '_token');
        Staff::where("id", $id)->update($data);
        return redirect()->route('view_staff')->with('flash_message', 'Staff Updated successfully');
    }
    function destroy($id)
    {
        $data = Staff::findOrfail($id);
        $data->delete();
        return redirect()->route('view_staff')->with("flash_error", 'Delete Successfully');
    }

    protected function district()
    {
        return \DB::table('districts')->get();
    }
}
