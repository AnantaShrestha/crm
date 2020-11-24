<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Level;

class LevelController extends Controller
{
    function index()
    {
        $data = Level::all();
        return view("admin.designation.level.view", compact("data"));
    }
    function create()
    {
        return view("admin.designation.level.add");
    }
    function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
        ]);
        $data = $request->all();
        $data['slug']=str_slug($data['level']);
        Level::create($data);
        return redirect()->route('view_levels')->with('flash_message', 'Level Created successfully');
    }
    function edit($id)
    {
        $data = Level::findOrfail($id);
        return view("admin.designation.level.edit", compact("data"));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'level' => 'required',
        ]);
        $data = $request->except("_token");
        $data['slug']=str_slug($data['level']);
        
        Level::where("id", $id)->update($data);
        return redirect()->route('view_levels')->with('flash_message', 'Staff Updated successfully');
    }
    function destroy($id)
    {
        $data = Level::findOrfail($id);
        $data->delete();
        return redirect()->route('view_levels')->with("flash_message", 'Delete Successfully');
    }
}
