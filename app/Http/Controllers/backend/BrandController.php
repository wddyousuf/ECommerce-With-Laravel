<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use Auth;
use App\Model\Brand;

class BrandController extends Controller
{
    public function view(){
        $db_data['all_data']=Brand::get();
        return view('backend.brand.view',$db_data);
    }
    public function add(){
        return view('backend.brand.add');
    }
    public function edit($id){
        $editData=Brand::find($id);
        return view('backend.brand.add',compact('editData'));
    }
    public function delete(Request $request){
        $data=Brand::find($request->id);
        $data->delete();
        return redirect()->route('brand.view')->with('success','Brand Deleted Successfully');
    }
    public function update(BrandRequest $request,$id){
        $data=Brand::find($id);
        $data->name=strtoupper($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('brand.view')->with('success', 'Brand Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Brand();
        $this->validate($request,[
            'name'=>'unique:brands,name',
        ]);
        $data->name=strtoupper($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('brand.view')->with('success', 'Brand Inserted Successfully');
    }
}
