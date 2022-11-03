<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Organizer;
use Illuminate\Support\Facades\Hash;

class OrganizerController extends Controller
{
    public function Index(){
        return view('organizer.organizer_login');
    }// End Method 

    public function Dashboard(){
        return view('organizer.dashboard');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('organizer')->attempt(['email' => $check['email'],'password' => $check['password']])){
            session()->flash('message','Event Organizer Login Successfully');
            return redirect()->route('organizer.dashboard');
        }else{
            session()->flash('message','Invalid Email Or Password');
            return back();
        }
    }// End Method 

    public function OrganizerLogout(){
        Auth::guard('organizer')->logout();
            session()->flash('message','Event Organizer Logout Successfully');
            return redirect()->route('organizer_login_form');
    }// End Method OrganizerRegister

    public function Profile(){
        $id = Auth::guard('organizer')->user()->id;
        $organizerData = Organizer::find($id);
        return view('organizer.organizer_profile_view',compact('organizerData'));
    }// End Method

    public function EditProfile(){
        $id = Auth::guard('organizer')->user()->id;
        $editData = Organizer::find($id);
        return view('organizer.organizer_profile_edit',compact('editData'));
    }// End Method 

    public function StoreProfile(Request $request){
        $id = Auth::guard('organizer')->user()->id;
        $data = Organizer::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if ($request->file('organizer_image')) {
            $file = $request->file('organizer_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['organizer_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return redirect()->route('organizer.profile')->with($notification);
    }// End Method

   

}
