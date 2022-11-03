<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    //********************************************admin*************************************************** */
    public function AllEventCategory(){
        $category = Category::latest()->get();
        return view('admin.event_category.event_category_all',compact('category'));
    } // End Method

    public function AddEventCategory(){
        return view('admin.event_category.event_category_add');
    } // End Method

    public function StoreEventCategory(Request $request){
        $image = $request->file('Cat_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

         Category::insert([
            'event_category' => $request->event_category,
            'details' => $request->details,
            'Cat_image' => $save_url,
            'created_at' => Carbon::now(),
           ]); 

        $notification = array(
           'message' => 'Event Category Inserted Successfully', 
           'alert-type' => 'success'
        );
       return redirect()->route('all.event.category')->with($notification);
   }// End Method

   public function EditEventCategory($id){
        $category = Category::findOrFail($id);
        return view('admin.event_category.event_category_edit',compact('category'));
    } // End Method

    public function UpdateEventCategory(Request $request){
        $event_id = $request->id;
        if ($request->file('Cat_image')) {
            $image = $request->file('Cat_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
            $save_url = 'upload/event/'.$name_gen;

            Category::findOrFail($event_id)->update([
                'event_category' => $request->event_category,
                'details' => $request->details,
                'Cat_image' => $save_url,
            ]); 
           
            $notification = array(
                'message' => 'Event Category Updated with Image Successfully', 
                'alert-type' => 'success'
        );
        return redirect()->route('all.event.category')->with($notification);
        } else{

        Category::findOrFail($event_id)->update([
            'event_category' => $request->event_category,
            'details' => $request->details,
           ]); 

           $notification = array(
           'message' => 'Event Category Updated without Image Successfully', 
           'alert-type' => 'success'
       );
        return redirect()->route('all.event.category')->with($notification);
        } // end Else
   } // End Method

   public function DeleteEventCategory($id){
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Event Category Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       
    } // End Method
    //***************************************Organizer********************************** */
    public function AllEventCategory1(){
        $category = Category::latest()->get();
        return view('organizer.event_category.event_category_all',compact('category'));
    } // End Method

    public function AddEventCategory1(){
        return view('organizer.event_category.event_category_add');
    } // End Method

    public function EditEventCategory1($id){
        $category = Category::findOrFail($id);
        return view('organizer.event_category.event_category_edit',compact('category'));
    } // End Method

    public function StoreEventCategory1(Request $request){
        $image = $request->file('Cat_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

         Category::insert([
            'event_category' => $request->event_category,
            'details' => $request->details,
            'Cat_image' => $save_url,
            'created_at' => Carbon::now(),
           ]); 

        $notification = array(
           'message' => 'Event Category Inserted Successfully', 
           'alert-type' => 'success'
        );
       return redirect()->route('all.event.category1')->with($notification);
   }// End Method

   public function UpdateEventCategory1(Request $request){
    $event_id = $request->id;
    if ($request->file('Cat_image')) {
        $image = $request->file('Cat_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/event/'.$name_gen);
        $save_url = 'upload/event/'.$name_gen;

        Category::findOrFail($event_id)->update([
            'event_category' => $request->event_category,
            'details' => $request->details,
            'Cat_image' => $save_url,
        ]); 
       
        $notification = array(
            'message' => 'Event Category Updated with Image Successfully', 
            'alert-type' => 'success'
    );
    return redirect()->route('all.event.category1')->with($notification);
    } else{

    Category::findOrFail($event_id)->update([
        'event_category' => $request->event_category,
        'details' => $request->details,
       ]); 

       $notification = array(
       'message' => 'Event Category Updated without Image Successfully', 
       'alert-type' => 'success'
   );
    return redirect()->route('all.event.category1')->with($notification);
    } // end Else
} // End Method
}
