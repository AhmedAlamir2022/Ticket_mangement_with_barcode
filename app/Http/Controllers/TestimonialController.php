<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    public function Testimonial (){
        $id = Auth::user()->id;
        $userData = User::find($id);
        $testimonials = Testimonial::where('email',Auth::user()->email)->latest()->get();
        return view('user.user_testimonials',compact('userData','testimonials'));
    }// End Method

    
        public function StoreTestimonial(Request $request){
            Testimonial::insert([
                'testimonial' => $request->testimonial,
                'status' => "0",
                'name' => (Auth::user()->name),
                'email' => (Auth::user()->email),
                'created_at' => Carbon::now(),
            ]);
            
            $notification = array(
                'message' => 'Your Testimonial Submited Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } // end mehtod 


        public function TestimonialsUsers(){
            $testimonials = Testimonial::latest()->get();
            return view('admin.testimonials.alltestimonials',compact('testimonials'));
        } // end mehtod 

        public function DeleteTestimonial ($id){
            Testimonial::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Testimonial Deleted Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } // end mehtod 

        public function ViewTestimonial($id){
            $testimonials = Testimonial::findOrFail($id);
            return view('admin.testimonials.viewtestimonials',compact('testimonials'));
        }// End Method

        public function UpdateTestimonial(Request $request){
            $testimonial_id = $request->id;

            Testimonial::findOrFail($testimonial_id)->update([
                'status' => $request->status,
            ]); 

            $notification = array(
            'message' => 'Testimonial Status Updated Successfully', 
            'alert-type' => 'success'
        );
            return redirect()->route('user.totestimonials')->with($notification);
            
        }//End Method
        
}
