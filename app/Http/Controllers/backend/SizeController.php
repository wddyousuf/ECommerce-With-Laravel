<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Size;
use Auth;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    public function view()
    {
        $db_data['all_data']=Size::get();
        return view('backend.size.view', $db_data);
    }
    public function add()
    {
        return view('backend.size.add');
    }
    public function edit($id)
    {
        $editData=Size::find($id);
        return view('backend.size.add', compact('editData'));
    }
    public function delete(Request $request)
    {
        $data=Size::find($request->id);
        $data->delete();
        return redirect()->route('size.view')->with('success', 'Size Deleted Successfully');
    }
    public function update(SizeRequest $request, $id)
    {
        $data=Size::find($id);
        $data->name=strtoupper($request->name);
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('size.view')->with('success', 'Size Updated Successfully ');
    }
    public function store(Request $request)
    {
        $data=new Size();
        $this->validate($request, [
            'name'=>'unique:sizes,name',
        ]);
        $data->name=strtoupper($request->name);
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('size.view')->with('success', 'Size Inserted Successfully');
    }
}
