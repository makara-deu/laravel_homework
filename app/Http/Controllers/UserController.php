<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
class UserController extends Controller
{
    public function add_profile()
    {
        // $user = new User();
        // $user = User::find(1);
        // $profile = new Profile();
        // $profile->user_id = $user->id;
        // $profile->phone = "12345";
        // $profile->address = "Ratanakiri";
        // $profile->save();
    }
    public function showuser()
    {
        $user = User::all();
        return view('challenge1.showuser', compact('user'));
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('challenge1.edituser',compact('user'));
    }
    public function updateuser($id, Request $request){
       $user = User::find($id);
       $user->name= $request->get('name');
       $user->email= $request->get('email');
       $user->profile()->phone= $request->get('email');
       $user->profile()->address= $request->get('address');
       $user->save();
       return redirect ('showuser');
    }
    public function deleteuser($id){
        $user = User::find($id);
       $user->delete();
       return redirect ('showuser');
    }
}
