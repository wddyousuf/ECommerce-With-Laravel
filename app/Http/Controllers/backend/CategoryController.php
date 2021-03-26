<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function view(){
        $db_data['all_data']=Category::get();
        return view('backend.category.view',$db_data);
    }
    public function add(){
        return view('backend.category.add');
    }
    public function edit($id){
        $editData=Category::find($id);
        return view('backend.category.add',compact('editData'));
    }
    public function delete(Request $request){
        $data=Category::find($request->id);
        $data->delete();
        return redirect()->route('category.view')->with('success','Category Deleted Successfully');
    }
    public function update(CategoryRequest $request,$id){
        $data=Category::find($id);
        $data->name=strtoupper($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('category.view')->with('success', 'Category Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Category();
        $this->validate($request,[
            'name'=>'unique:categories,name',
        ]);
        $data->name=strtoupper($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('category.view')->with('success', 'Category Inserted Successfully');
    }
}
