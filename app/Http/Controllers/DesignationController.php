<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Designation;

class DesignationController extends Controller
{
    public function view()
    {
        $designation=Designation::all();
        return view('admin.Designation.title.view',compact('designation'));
    }

    public function create()
    {
        return view('admin.Designation.title.add');
       
    }

    public function store(Request $request)
        {
            $request->validate([
                'title'=>'required'
            ]);
            $data= $request->all();
            $data['slug']=str_slug($data['title']);
            Designation::create($data);
            return redirect()->route('Designation.view')->with('flash_message','Created Successfully');

        }

    public function edit($id)
    {
        $data=Designation::findorfail($id);
        return view('admin.Designation.title.edit',compact('data'));
    }
    
    public function update(Request $request,$id)
    {
        $data=$request->except('_token');
            $data['slug']=str_slug($data['title']);
        
        Designation::where('id',$id)->update($data);
        return redirect()->route('Designation.view')->with('flash_message', 'Title Has Been Updated');
    }

    public function destroy($id)
    {
        $title=Designation::findorfail($id);
        $title->delete();

        return redirect()->route('Designation.view')->with('flash_error','Title Has Been Deleted');
    }
    
}
