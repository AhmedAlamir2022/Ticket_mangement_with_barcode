<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TicketController extends Controller
{
    public function AllTicket(){
        $tickets = Ticket::latest()->get();
        return view('admin.ticket.ticket_all',compact('tickets'));
    } // End Method

    public function AddTicket(){
        $events = Event::orderBy('event_title','ASC')->get();
        return view('admin.ticket.ticket_add',compact('events'));
    }// End Method

    public function StoreTicket(Request $request){
        $image = $request->file('ticket_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/ticket/'.$name_gen);
        $save_url = 'upload/ticket/'.$name_gen;
        Ticket::insert([
            'ticket_event_id' => $request->ticket_event_id,
            'ticket_title' => $request->ticket_title,
            'ticket_price' => $request->ticket_price,
            'ticket_description' => $request->ticket_description,
            'ticket_status' => "0",
            'ticket_date' => $request->ticket_date,
            'ticket_duration' => $request->ticket_duration,
            'ticket_time' => $request->ticket_time,
            'ticket_seatnumber' => $request->ticket_seatnumber,
            'ticket_country' => $request->ticket_country,
            'ticket_address' => $request->ticket_address,
            'ticket_remark' => "0",
            'final' =>"Title: ". $request->ticket_title.",Price: ".$request->ticket_price.",Date: ".$request->ticket_date.",Time: ".$request->ticket_time.",Seat Number".$request->ticket_seatnumber,
            'ticket_image' => $save_url,
            'created_at' => Carbon::now(),
        ]); 
            $notification = array(
            'message' => 'Ticket Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.ticket')->with($notification);
    }// End Method

    public function ViewTicket ($id){
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('admin.ticket.ticket_view',compact('events','tickets'));
    } // End Method

    public function PrintTicket($id)
    {
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('admin.ticket.ticket_print',compact('events','tickets'));
    }//end method

    public function DeleteTicket($id){
        $tickets = Ticket::findOrFail($id);
        $img = $tickets->ticket_image;
        unlink($img);
        Ticket::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Ticket Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);       
     } // End Method

    public function ReportTicket(){
        $tickets = Ticket::latest()->get();
        $events = Event::orderBy('event_title','ASC')->get();
        return view('admin.ticket.ticket_report',compact('events','tickets'));
    }// End Method
      
    public function SearchTicket(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $tickets = Ticket::whereBetween('created_at',[$start_at,$end_at])->get();
        $events = Event::all();
        return view('admin.ticket.ticket_report',compact('events'))->withDetails($tickets); 
    }//end method

    public function HomeTicket(){
        $events = Event::orderBy('event_title','ASC')->get();
        $tickets = Ticket::latest()->paginate(20);
        return view('frontend.tickets',compact('tickets','events'));
     }// End Method

     public function HomeAbout(){
        return view('frontend.about');
     }// End Method

     public function TicketDetails($id){
        $alltickets = Ticket::latest()->limit(5)->get();
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('frontend.ticket_details',compact('alltickets','events','tickets'));
    } // End Method 

    public function CategoryTicket ($id){
        $ticketpost = Ticket::where('ticket_event_id',$id)->orderBy('id','DESC')->get();
        $alltickets = Ticket::latest()->limit(10)->get();
        $events = Event::orderBy('event_title','ASC')->get();
        $eventname = Event::findOrFail($id);
        return view('frontend.cat_ticket_details',compact('ticketpost','alltickets','events','eventname'));
     } // End Method 
 

     public function AllTicket1(){
        $tickets = Ticket::latest()->get();
        return view('organizer.ticket.ticket_all',compact('tickets'));
    } // End Method

    public function ViewTicket1 ($id){
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('organizer.ticket.ticket_view',compact('events','tickets'));
    } // End Method

    public function PrintTicket1($id)
    {
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('organizer.ticket.ticket_print',compact('events','tickets'));
    }//end method

    public function ReportTicket1(){
        $tickets = Ticket::latest()->get();
        $events = Event::orderBy('event_title','ASC')->get();
        return view('organizer.ticket.ticket_report',compact('events','tickets'));
    }// End Method1

    public function SearchTicket1(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $tickets = Ticket::whereBetween('created_at',[$start_at,$end_at])->get();
        $events = Event::all();
        return view('organizer.ticket.ticket_report',compact('events'))->withDetails($tickets); 
    }//end method

    public function AddTicket1(){
        $events = Event::orderBy('event_title','ASC')->get();
        return view('organizer.ticket.ticket_add',compact('events'));
    }// End Method

    public function StoreTicket1(Request $request){
        $image = $request->file('ticket_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/ticket/'.$name_gen);
        $save_url = 'upload/ticket/'.$name_gen;
        Ticket::insert([
            'Organizer_email' => Auth::guard('organizer')->user()->email,
            'ticket_event_id' => $request->ticket_event_id,
            'ticket_title' => $request->ticket_title,
            'ticket_price' => $request->ticket_price,
            'ticket_description' => $request->ticket_description,
            'ticket_status' => "1",
            'ticket_date' => $request->ticket_date,
            'ticket_duration' => $request->ticket_duration,
            'ticket_time' => $request->ticket_time,
            'ticket_seatnumber' => $request->ticket_seatnumber,
            'ticket_country' => $request->ticket_country,
            'ticket_address' => $request->ticket_address,
            'ticket_remark' => "0",
            'final' =>"Title: ". $request->ticket_title.",Price: ".$request->ticket_price.",Date: ".$request->ticket_date.",Time: ".$request->ticket_time.",Seat Number".$request->ticket_seatnumber,
            'ticket_image' => $save_url,
            'created_at' => Carbon::now(),
        ]); 
            $notification = array(
            'message' => 'Ticket Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.ticket1')->with($notification);
    }// End Method


    public function ViewUserTicket ($id){
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('user.ticket_view',compact('events','tickets'));
    } // End Method

    public function BookUserTicket (Request $request){
        $ticket_id = $request->id;
        Ticket::findOrFail($ticket_id)->update([
            'ticket_remark' => $request->ticket_remark,
            'user_email' => Auth::user()->email,
            'checkout' => '0',
        ]); 

        $notification = array(
        'message' => 'Ticket Booked Successfully', 
        'alert-type' => 'success'
    );
        return redirect()->route('user.mytickets')->with($notification);
        
    }//End Method

    public function MyTickets(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        $tickets = Ticket::where('user_email',Auth::user()->email)->get();
        return view('user.mytickets',compact('userData','tickets'));
    }// End Method


    public function TicketCheckout($id){
        $tickets = Ticket::findOrFail($id);
        $userid = Auth::user()->id;
        $userData = User::find($userid);
        return view('user.ticket_checkout',compact('tickets','userData'));
    }//End Method


    public function CheckoutTicket (Request $request){
        $ticket_id = $request->id;
        Ticket::findOrFail($ticket_id)->update([
            'checkout' => '1',
        ]); 

        $notification = array(
        'message' => 'Checkout Updated Successfully', 
        'alert-type' => 'success'
    );
        return redirect()->route('user.mytickets')->with($notification);
        
    } //End Method

    public function TicketInfo($id){
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('user.ticket_info',compact('events','tickets'));
    } // End Method 


    public function TicketSell($id){
        $tickets = Ticket::findOrFail($id);
        $events = Event::orderBy('event_title','ASC')->get();
        return view('user.ticket_sell',compact('events','tickets'));
    } // End Method 

    public function SellUserTicket (Request $request){
        $ticket_id = $request->id;
        Ticket::findOrFail($ticket_id)->update([
            'ticket_remark' => $request->ticket_remark,
            'ticket_price' => $request->ticket_price,
        ]); 

        $notification = array(
        'message' => 'Ticket Resell Successfully But Need Organizer Acception', 
        'alert-type' => 'warning'
    );
        return redirect()->route('user.mytickets')->with($notification);
        
    }//End Method 

    public function PendingTicket(){
        $tickets = Ticket::where('ticket_remark',2)->get();
        return view('organizer.ticket.pending_tickets',compact('tickets'));
    } // End Method

    public function ViewPenTicket($id){
        $tickets = Ticket::findOrFail($id);
        return view('organizer.ticket.pen_status_ticket',compact('tickets'));
    }// End Method

    public function UpdatePenTicket(Request $request){
        $ticket_id = $request->id;

        Ticket::findOrFail($ticket_id)->update([
            'ticket_remark' => $request->ticket_remark,
            'ticket_price' => $request->ticket_price,
            'user_email' => ' ',
        ]); 

        $notification = array(
        'message' => 'Ticket Status Updated Successfully', 
        'alert-type' => 'success'
    );
        return redirect()->route('pending.ticket')->with($notification);
        
    }//End Method

     
}
