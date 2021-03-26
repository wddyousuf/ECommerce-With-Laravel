<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;

class LogoController extends Controller
{
    public function view(){
        $db_data['countlogo']=Logo::count();
        $db_data['all_data']=Logo::get();
        return view('backend.logo.view',$db_data);
    }
    public function add(){
        return view('backend.logo.add');
    }
    public function edit($id){
        $editData=Logo::find($id);
        return view('backend.logo.edit',compact('editData'));
    }
    public function delete($id){
        $data=Logo::find($id);
        if (file_exists('upload/logo/' . $data->logo) AND ! empty ($data->logo)) {
            unlink('upload/logo/'.$data->logo);
        }
        $data->delete();
        return redirect()->route('logo.view')->with('success','Logo Deleted Successfully');
    }
    public function update(Request $request,$id){
        $data=Logo::find($id);
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(\public_path('upload/logo/'.$data->logo));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo'),$filename);
            $data['logo']=$filename;
        }
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('logo.view')->with('success', 'Logo Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Logo();
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo'),$filename);
            $data['logo']=$filename;
        }

        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('logo.view')->with('success', 'Logo Inserted Successfully ');
    }
}
