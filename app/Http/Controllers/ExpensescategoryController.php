<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expensescategory;

class ExpensescategoryController extends Controller
{
    public function __construct()
    {
    	$this->expensescategory=new Expensescategory();
    }

    public function index()
    {
    	$expensescategory=$this->expensescategory->getAll();
    	return view('admin.account.expenses.view',compact('expensescategory'));
    }

    public function create()
    {
    	return view('admin.account.expenses.form');
    }

    public function store(Request $request)
    {
    	$data=$request->validate([
    		'name'=>'required',
    		'description'=>'nullable'
    	]);
    	$data['slug']=str_slug($data['name']);
    	$this->expensescategory->createExpensescategory($data);
    	return redirect()->route('expensescategory.index')->with('flash_message','Created Successfully');
    }

    public function edit(Expensescategory $expensescategory)
    {

        return view('admin.account.expenses.form',compact('expensescategory'));
    }

    public function update(Request $request,Expensescategory $expensescategory)
    {
        $data=$request->validate([
            'name'=>'required',
            'description'=>'nullable'
        ]);
        $data['slug']=str_slug($data['name']);
        $expensescategory->update($data);
        return redirect()->route('expensescategory.index')->with('flash_message','Update Successfully');
    }
    public function delete(Expensescategory $expensescategory)
    {
        $expensescategory->delete();
        return redirect()->route('expensescategory.index')->with('flash_error','Delete Successfully');
    }
}
