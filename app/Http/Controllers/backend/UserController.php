<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userview(){
        $db_data['all_data']=User::get();
        return view('backend.user.users',$db_data);
    }
    public function userAdd(){
        return view('backend.user.add');
    }
    public function userEdit($id){
        $editData=User::find($id);
        return view('backend.user.edit_user',compact('editData'));
    }
    public function userDelete(Request $request){
        $data=User::find($request->id);
        if (file_exists('public/upload/user_images/' . $data->image) AND ! empty ($data->image)) {
            unlink('public/upload/user_images/'.$data->image);
        }
        $data->delete();
        return redirect()->route('user.view');
    }
    public function userUpdate(Request $request,$id){
        $data=User::find($id);
        $data->role=$request->role;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->gender=$request->gender;
        $data->image=$request->image;
        $data->save();
        return redirect()->route('user.view')->with('success', 'Data Updated Successfully ');
    }
    public function userStore(Request $request){
        $this->validate($request,[
            'email'=>'unique:users,email',
        ]);
        $data=new User();
        $data->role=$request->role;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->gender=$request->gender;
        $data->password=bcrypt($request->password);
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('user.view')->with('success', 'Data Inserted Successfully ');
    }
    public function userUnverified(){
        $db_data['all_data']=User::where('status','0')->where('role','customer')->get();
        return view('backend.user.unverified',$db_data);
    }
}

