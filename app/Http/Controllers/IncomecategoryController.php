<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incomecategory;

class IncomecategoryController extends Controller
{
    public function __construct()
    {
    	$this->incomecategory=new Incomecategory();
    }

    public function index()
    {
    	$incomecategory=$this->incomecategory->getAll();
    	return view('admin.account.incomecategory.index',compact('incomecategory'));
    }

    public function create()
    {
    	return view('admin.account.incomecategory.form');
    }

    public function store(Request $request)
    {
    	$data=$request->validate([
    		'name'=>'required',
    		'description'=>'nullable'
    	]);
    	$data['slug']=str_slug($data['name']);
    	$this->incomecategory->createIncomecategory($data);
    	return redirect()->route('incomecategory.index')->with('flash_message','Created Successfully');
    }

    public function edit(Incomecategory $incomecategory)
    {

        return view('admin.account.expenses.form',compact('incomecategory'));
    }

    public function update(Request $request,Incomecategory $incomecategory)
    {
        $data=$request->validate([
            'name'=>'required',
            'description'=>'nullable'
        ]);
        $data['slug']=str_slug($data['name']);
        $incomecategory->update($data);
        return redirect()->route('incomecategory.index')->with('flash_message','Update Successfully');
    }
    public function delete(Incomecategory $incomecategory)
    {
        $incomecategory->delete();
        return redirect()->route('incomecategory.index')->with('flash_error','Delete Successfully');
    }
}
