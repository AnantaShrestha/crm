<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Income;
use App\Incomecategory;

class IncomesController extends Controller
{
    public function incomes(){
        $incomes = Income::all();
        return view('admin.incomes.view',compact('incomes'));
    }
    public function addIncome(){
        $category = Incomecategory::latest()->get();
        return view ('admin.incomes.add',compact('category'));

    }
    public function editIncome($id){
        $category = Incomecategory::latest()->get();
        $incomes = Income::findorfail($id);
        return view ('admin.incomes.edit',compact('incomes','category'));
    }

    public function updateIncome(Request $request,$id){
        $data = $request->all();
        $incomes = Income::find($id);
        $incomes->update($data);
        return redirect()->route('income.incomes.view')->with('flash_messsage','Income updated successfully');
    }
    public function destroy($id){
        $incomes = Income::find($id);
        $incomes->delete();
        return back()->with('flash_error','Deleted successfully');
    }

    public function store(Request $request){
        $data = $request->all();
        Income::create($data);
        return redirect()->route('income.incomes.view')->with('flash_message','Income is successfully added.');
    }
}
