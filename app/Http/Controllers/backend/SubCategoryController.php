<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use Auth;

class SubCategoryController extends Controller
{
    public function view(){
        $db_data['all_data']=SubCategory::get();
        return view('backend.subCategory.view',$db_data);
    }
    public function add(){
        $category=Category::all();
        return view('backend.subCategory.add',compact('category'));
    }
    public function edit($id){
        $editData=SubCategory::find($id);
        $category=Category::all();
        return view('backend.subCategory.add',compact('editData','category'));
    }
    public function delete(Request $request){
        $data=SubCategory::find($request->id);
        $data->delete();
        return redirect()->route('subCategory.view')->with('success','SubCategory Deleted Successfully');
    }
    public function update(SubCategoryRequest $request,$id){
        $data=SubCategory::find($id);
        $data->cat_id=$request->Category;
        $data->name=strtoupper($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('subCategory.view')->with('success', 'SubCategory Updated Successfully ');
    }
    public function store(Request $request){
        $data=new SubCategory();
        $this->validate($request,[
            'name'=>'unique:sub_categories,name',
        ]);
        $data->cat_id=$request->Category;
        $data->name=strtoupper($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('subCategory.view')->with('success', 'SubCategory Inserted Successfully');
    }
}
