<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use Illuminate\Support\Carbon;

class SubscriberController extends Controller
{
    public function SubscribeEmail(){
        $subscribers = Subscribe::latest()->get();
        return view('admin.subscribers.allsubscribers',compact('subscribers'));
    } // end mehtod 

    public function DeleteSubscribe($id){
        Subscribe::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Subscribtion Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end mehtod 

    public function StoreSubscribe(Request $request){
        Subscribe::insert([
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);
         $notification = array(
            'message' => 'Your Subscribtion Submited Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end mehtod 
}
