<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Auth;
use App\Models\Category;
use Image;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    public function AllEvent(){
        $events = Event::latest()->get();
        return view('admin.event.event_all',compact('events'));
    } // End Method

    public function AddEvent(){
        $categories = Category::orderBy('event_category','ASC')->get();
        return view('admin.event.event_add',compact('categories'));
    }// End Method

    public function StoreEvent(Request $request){
        $image = $request->file('event_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

        Event::insert([
            'event_category_id' => $request->event_category_id,
            'event_title' => $request->event_title,
            'event_description' => $request->event_description,
            'event_image' => $save_url,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Event Inserted Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->route('all.event')->with($notification);
   }// End Method


   public function EditEvent($id){
        $events = Event::findOrFail($id);
        $categories = Category::orderBy('event_category','ASC')->get();
        return view('admin.event.event_edit',compact('events','categories'));
    } // End Method

    public function UpdateEvent (Request $request){
        $event_id = $request->id;
        if ($request->file('event_image')) {
            $image = $request->file('event_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
            $save_url = 'upload/event/'.$name_gen;

            Event::findOrFail($event_id)->update([
                'event_category_id' => $request->event_category_id,
                'event_title' => $request->event_title,
                'event_description' => $request->event_description,
                'event_image' => $save_url,
            ]); 
            $notification = array(
            'message' => 'Event Updated with Image Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.event')->with($notification);
        } else{

            Event::findOrFail($event_id)->update([
                'event_category_id' => $request->event_category_id,
                'event_title' => $request->event_title,
                'event_description' => $request->event_description, 
            ]); 
            $notification = array(
            'message' => 'Event Updated without Image Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.event')->with($notification);
       } // end Else
   } // End Method

    public function DeleteEvent($id){
        $events = Event::findOrFail($id);
        $img = $events->event_image;
        unlink($img);
        Event::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Event Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       
    } // End Method 

    public function HomeEvent(){
        $categories = Category::orderBy('event_category','ASC')->get();
        $allevents = Event::latest()->paginate(20);
        return view('frontend.event',compact('allevents','categories'));
     } // End Method 
     /*************************************organizer******************************** */
     public function AllEvent1(){
        $events = Event::latest()->get();
        return view('organizer.event.event_all',compact('events'));
    } // End Method

    public function AddEvent1(){
        $categories = Category::orderBy('event_category','ASC')->get();
        return view('organizer.event.event_add',compact('categories'));
    }// End Method

    public function EditEvent1($id){
        $events = Event::findOrFail($id);
        $categories = Category::orderBy('event_category','ASC')->get();
        return view('organizer.event.event_edit',compact('events','categories'));
    } // End Method

    public function StoreEvent1(Request $request){
        $image = $request->file('event_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

        Event::insert([
            'event_category_id' => $request->event_category_id,
            'event_title' => $request->event_title,
            'event_description' => $request->event_description,
            'event_image' => $save_url,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Event Inserted Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->route('all.event1')->with($notification);
   }// End Method
   public function UpdateEvent1 (Request $request){
    $event_id = $request->id;
    if ($request->file('event_image')) {
        $image = $request->file('event_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

        Event::findOrFail($event_id)->update([
            'event_category_id' => $request->event_category_id,
            'event_title' => $request->event_title,
            'event_description' => $request->event_description,
            'event_image' => $save_url,
        ]); 
        $notification = array(
        'message' => 'Event Updated with Image Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->route('all.event1')->with($notification);
    } else{

        Event::findOrFail($event_id)->update([
            'event_category_id' => $request->event_category_id,
            'event_title' => $request->event_title,
            'event_description' => $request->event_description, 
        ]); 
        $notification = array(
        'message' => 'Event Updated without Image Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->route('all.event1')->with($notification);
   } // end Else
} // End Method

}
