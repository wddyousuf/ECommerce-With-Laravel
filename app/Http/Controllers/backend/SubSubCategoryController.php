<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\SubCategory;
use App\Model\SubSubCategory;
use Illuminate\Http\Request;
use Auth;
use App\Model\Category;
use App\Http\Requests\SubSubCategoryRequest;

class SubSubCategoryController extends Controller
{
    public function view(){
        $db_data['all_data']=SubSubCategory::get();
        return view('backend.subSubCategory.view',$db_data);
    }
    public function add(){
        $category=Category::all();
        $subCategory=SubCategory::all();
        return view('backend.subSubCategory.add',compact('category','subCategory'));
    }
    public function edit($id){
        $editData=SubSubCategory::find($id);
        $category=Category::all();
        $subCategory=SubCategory::all();
        return view('backend.subSubCategory.add',compact('editData','category','subCategory'));
    }
    public function delete(Request $request){
        $data=SubSubCategory::find($request->id);
        $data->delete();
        return redirect()->route('subSubCategory.view')->with('success','SubSubCategory Deleted Successfully');
    }
    public function update(SubSubCategoryRequest $request,$id){
        $data=SubSubCategory::find($id);
        $data->cat_id=$request->Category;
        $data->subcat_id=$request->subCategory;
        $data->name=strtoupper($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('subSubCategory.view')->with('success', 'SubSubCategory Updated Successfully ');
    }
    public function store(Request $request){
        $data=new SubSubCategory();
        $this->validate($request,[
            'name'=>'unique:sub_sub_categories,name',
        ]);
        $data->cat_id=$request->Category;
        $data->subcat_id=$request->subCategory;
        $data->name=strtoupper($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('subSubCategory.view')->with('success', 'SubSubCategory Inserted Successfully');
    }
}
