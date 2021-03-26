<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Color;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\ColorRequest;

class ColorController extends Controller
{
    public function view(){
        $db_data['all_data']=Color::get();
        return view('backend.color.view',$db_data);
    }
    public function add(){
        return view('backend.color.add');
    }
    public function edit($id){
        $editData=Color::find($id);
        return view('backend.color.add',compact('editData'));
    }
    public function delete(Request $request){
        $data=Color::find($request->id);
        $data->delete();
        return redirect()->route('color.view')->with('success','Color Deleted Successfully');
    }
    public function update(ColorRequest $request,$id){
        $data=Color::find($id);
        $data->name=ucwords($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('color.view')->with('success', 'Color Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Color();
        $this->validate($request,[
            'name'=>'unique:colors,name',
        ]);
        $data->name=ucwords($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('color.view')->with('success', 'Color Inserted Successfully');
    }
}
