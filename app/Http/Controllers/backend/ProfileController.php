<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function profilesView(){
        $id= Auth::user()->id;
        $data=User::find($id);
        return view('backend.user.viewProfile',compact('data'));
    }
    public function profilesEdit(){
        $id= Auth::user()->id;
        $editData=User::find($id);
        return view('backend.user.editProfile',compact('editData'));
    }
    public function profilesUpdate(Request $request){
        $id= Auth::user()->id;
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->gender=$request->gender;
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(\public_path('upload/user_images/'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('profiles.view')->with('success', 'Data Updated Successfully ');
    }
    public function password(){
        return view('backend.user.changePassword');
    }
    public function passwordReset(Request $request){
        if(Auth::attempt(['id' => Auth::user()->id, 'password' => $request->password])){
            $user=User::find(Auth::user()->id);
            $user->password=bcrypt($request->n_password);
            $user->save();
            return redirect()->route('profiles.view')->with('success','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry!Current Password did not matched');
        }
    }
}
