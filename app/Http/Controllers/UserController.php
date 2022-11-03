<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Profile(){ 
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.user_profile_view',compact('userData'));

    }// End Method 

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'User Logout Successfully', 
            'alert-type' => 'success'
        );
        return redirect('/login')->with($notification);
    } // End Method 

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city = $request->city;
        if ($request->file('user_image')) {
            $file = $request->file('user_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['user_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'User Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return redirect()->route('user.profile')->with($notification);
    }// End Method


    public function ChangePassword(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.user_change_password',compact('userData'));
    }// End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'message' => 'Password Updated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('user.change.password')->with($notification);
        } else{

            $notification = array(
                'message' => 'Old password is not match', 
                'alert-type' => 'error'
            );
            return redirect()->route('user.change.password')->with($notification);
        }

    }// End Method

    
}
