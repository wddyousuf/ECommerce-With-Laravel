<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;

class AboutController extends Controller
{
    public function view(){
        $db_data['count_about']=About::count();
        $db_data['all_data']=About::get();
        return view('backend.about.view',$db_data);
    }
    public function add(){
        return view('backend.about.add');
    }
    public function edit($id){
        $editData=About::find($id);
        return view('backend.about.edit',compact('editData'));
    }
    public function delete(Request $request){
        $data=About::find($request->id);
        $data->delete();
        return redirect()->route('about.view')->with('success','About Us Deleted Successfully');
    }
    public function update(Request $request,$id){
        $data=About::find($id);
        $data->about=$request->about;
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('about.view')->with('success', 'About Us Updated Successfully ');
    }
    public function store(Request $request){
        $data=new About();
        $data->about=$request->about;
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('about.view')->with('success', 'About Us Inserted Successfully');
    }
}
