<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\Organizer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Image;
use Carbon\Carbon;

class AdminController extends Controller
{ 
    public function Index(){
        return view('admin.admin_login');
    }// End Method 

    public function Dashboard(){
        return view('admin.dashboard');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'],'password' => $check['password']])){
            session()->flash('message','Admin Login Successfully');
            return redirect()->route('admin.dashboard');
        }else{
            session()->flash('message','Invalid Email Or Password');
            return back();
        }
    }// End Method 

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        session()->flash('message','Admin Logout Successfully');
        return redirect()->route('login_form');
    }// End Method 

    public function AdminRegister(){
        return view('admin.users.admin_register');
    }// End Method

    public function AdminRegisterCreate(Request $request){
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        session()->flash('message','Admin Created Successfully');
        return back();
    }// End Method 

    public function AddEventOrganizer(){
        return view('admin.users.add_event_organizer');
    }// End Method

    public function AdminOrganizerAdd(Request $request){
        Organizer::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Event Organizer Added Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('organizer.all')->with($notification);
    }// End Method

    public function Profile(){
        $id = Auth::guard('admin')->user()->id;
        $adminData = Admin::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }// End Method

    public function EditProfile(){
        $id = Auth::guard('admin')->user()->id;
        $editData = Admin::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    }// End Method 

    public function StoreProfile(Request $request){
        $id = Auth::guard('admin')->user()->id;
        $data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return redirect()->route('admin.profile')->with($notification);
    }// End Method

    public function ChangePassword(){
        return view('admin.admin_change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);
        $hashedPassword = Auth::guard('admin')->user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = Admin::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();
            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else{
            session()->flash('message','Old password is not match');
            return redirect()->back();
        }
    }// End Method

    public function AdminAll(){
        $admins = Admin::latest()->get();
        return view('admin.users.admin_all',compact('admins'));
    } // End Method

    public function OrganizerAll(){
        $organizers = Organizer::latest()->get();
        return view('admin.users.organizers_all',compact('organizers'));
    } // End Method

    public function DeleteOrganizer($id){
        $organizers = Organizer::findOrFail($id);
        Organizer::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Event Organizer Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       
    } // End Method 

    public function EditOrganizer ($id){
        $organizer = Organizer::findOrFail($id);
        return view('admin.users.organizer_edit',compact('organizer'));
    } // End Method

    public function UpdateOrganizer  (Request $request){
        $organizer_id = $request->id;
        if ($request->file('organizer_image')) {
            $image = $request->file('organizer_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/admin_images/'.$name_gen);
            $save_url = 'upload/admin_images/'.$name_gen;

            Organizer::findOrFail($organizer_id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'organizer_image' => $save_url,
            ]); 
            $notification = array(
            'message' => 'Event Organizer Updated with Image Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('organizer.all')->with($notification);
        } else{

            Organizer::findOrFail($organizer_id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email, 
            ]); 
            $notification = array(
            'message' => 'Event Organizer Updated without Image Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('organizer.all')->with($notification);
       } // end Else
   } // End Method

    public function UsersAll(){
        $users = User::latest()->get();
        return view('admin.users.users_all',compact('users'));
    } // End Method

    public function DeleteUser($id){
        $users = User::findOrFail($id);
        User::findOrFail($id)->delete();
        $notification = array(
            'message' => 'User Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       
    } // End Method 

}
