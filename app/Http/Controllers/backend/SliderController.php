<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Slider;

class SliderController extends Controller
{
    public function view(){
        $db_data['all_data']=Slider::get();
        return view('backend.slider.view',$db_data);
    }
    public function add(){
        return view('backend.slider.add');
    }
    public function edit($id){
        $editData=Slider::find($id);
        return view('backend.slider.edit',compact('editData'));
    }
    public function delete($id){
        $data=Slider::find($id);
        if (file_exists('upload/slider/' . $data->slider) AND ! empty ($data->slider)) {
            unlink('upload/slider/'.$data->slider);
        }
        $data->delete();
        return redirect()->route('slider.view')->with('success','Slider Deleted Successfully');
    }
    public function update(Request $request,$id){
        $data=Slider::find($id);
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(\public_path('upload/slider/'.$data->slider));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider'),$filename);
            $data['slider']=$filename;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('slider.view')->with('success', 'Slider Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Slider();
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider'),$filename);
            $data['slider']=$filename;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('slider.view')->with('success', 'Slider Inserted Successfully');
    }
}
