<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use File;
use App\Models\User;

class AdminController extends Controller
{
    public function viewLogin(){
      return view('auth.login');
    }

    public function index(){
        return view('admin.dashboard');
    }
    public function profile($id){
        $adminData = User::find($id);
       return view('admin.admin_profile_view', compact('adminData'));
    }

    public function editProfile($id){
        $adminData = User::find($id);
        return view('admin.admin_profile_edit', compact('adminData'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => ['required', 'min:4'],
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'profile_image' => ['nullable', 'image', 'mimes:png,jpg, jpeg']
        ]);

        $data = User::find($id);

        if($request->hasFile('profile_image')){

            if(File::exists(public_path('storage/'.$data->image))){
                File::delete(public_path('storage/'.$data->image));
            }
          
            $fileName = date('Y-m-d-His').'_' .$request->file('profile_image')->getClientOriginalName();
            
            $request->profile_image =$request->file('profile_image')->storeAs('images', $fileName ,'public');
        }
        
        $data->name = $request->name;
        $data->username = $request->username;
        $data->image = $request->profile_image;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'Successfully updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile', $data->id)->with('success','Successfully updated');
    }

    public function changePassword(){
        return view('admin.admin_change_password');
    }

    public function updatePassword(Request $request, $id){
        $validateData = $request->validate([
            'old_password' => ['required', 'min:6'],
            'new_password' => ['required', 'min:6'],
            'confirm_password' => 'required|same:new_password'
        ]);

        $user= User::find($id);

        if(Hash::check($validateData['old_password'], $user->password)){
            $user->password = bcrypt($validateData['new_password']);
            $user->save();
            return redirect()->back()->with('success', 'Password Change Successfully');
        }else{
            return redirect()->back()->with('info', 'Old password is not match with our record');
        }
    }
}
