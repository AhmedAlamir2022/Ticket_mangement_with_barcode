<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiery;

class QuieryController extends Controller
{
    public function ContacQuery(){
        $quires = Quiery::latest()->get();
        return view('admin.contact.allcontactquires',compact('quires'));
    } // end mehtod 

    public function EditQuery($id){
        $quires = Quiery::findOrFail($id);
        return view('admin.contact.query_edit',compact('quires'));
   } // End Method

   public function UpdateQuery (Request $request){
        $query_id = $request->id;
        Quiery::findOrFail($query_id)->update([
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email, 
        ]); 
        $notification = array(
            'message' => 'Query Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

    public function DeleteQuery($id){
        Quiery::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Your Quiery Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end mehtod 
}
