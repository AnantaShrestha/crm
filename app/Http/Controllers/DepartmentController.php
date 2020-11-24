<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAllDepartment()
    {
        //$department = Department::latest()->get();
        $department = Department::get();
        return view('admin.Department.view', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addDepartment(Request $request)
    {
        if (\Gate::denies('admin_staff')) {
            abort(403, 'Access Denied');
        }
        $department = Department::all();
        ini_set('memory_limit', '256M');
        if ($request->isMethod('post')) {
            $request->validate([
                'department_id' => 'required',
                'departmentname' => 'required',
            ]);


            $data = $request->all();
            //dd($data);
            $department = new Department;
            $department->department_id = $data['department_id'];
            $department->departmentname = $data['departmentname'];
            $department->save();


            return redirect()->route('viewDepartment')->with('flash_message', 'New Department Has Been Added');
        }
        return view('admin.department.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function editDepartment(Request $request, $department_id)
    {
        if (\Gate::denies('admin')) {
            abort(403, 'Access Denied');
        }
        $department = Department::find($department_id);

        ini_set('memory_limit', '256M');
        if ($request->isMethod('post')) {
            $request->validate([
                'department_id' => 'required',
                'departmentname' => 'required',
            ]);
            $data = $request->all();
            $department = Department::findOrfail($department_id);
            $department->department_id = $data['department_id'];
            $department->departmentname = $data['departmentname'];
            $department->save();



            return redirect()->route('viewDepartment')->with('flash_message', 'Department Details Has Been Updated');
        }
        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function deleteDepartment($id)
    {
        /* if (\Gate::denies('admin')) {
            abort(403, 'Access Denied');
        }*/
        $department = Department::find($id);
        $department->delete();

        return redirect()->route('viewDepartment')->with('flash_error', 'Department Has Been Deactivated');
    }
    // Checking Users Email
    public function checkUserId(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $emailCount = Department::where('department_id', $data['id'])->count();
            if ($emailCount > 0) {
                echo "exists";
            }
        }
    }
}