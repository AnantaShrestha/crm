<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expenses;
use App\Expensescategory;

class ExpensesController extends Controller
{
    //
    public function create()
    {
    	$expensescategories=$this->getCategories();
    	return view('admin.expenses.add',compact('expensescategories'));
    }
    public function view()
    {
        /*$expenses= new Expensescategories();
    $expenses=$expenses->orderBy('id','ASC')->get();*/
    	$expenses=Expenses::all();
    	return view('admin.expenses.view',compact('expenses'));
    }
    public function store(Request $request)
    {
    	$data=$request->all();
    	Expenses::create($data);
    	return redirect()->route('expenses.view')->with('flash_message','Expenses Successfully Created');
    }
 public function edit($id)
    {
        $expensescategories=$this->getCategories();
    	$expenses=Expenses::findorfail($id);
    	return view('admin.expenses.edit',compact('expenses','expensescategories'));
    }
    public function update(Request $request, $id)
    {
    	$data=$request->all();
    	$expenses=Expenses::findorfail($id);
    	$expenses->update($data);
    	return redirect()->route('expenses.view',compact('expenses'));
    }
    public function destroy($id)
    {
    	 $expenses=Expenses::findorfail($id);         
          $expenses->delete();

			return back()->with('flash_error','Deleted Successfully');
        }
    

      protected function getCategories()
   {
        return Expensescategory::all();
   }
 
    
};
