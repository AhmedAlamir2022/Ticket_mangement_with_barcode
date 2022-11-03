<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuieryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-----------------------------------Admin Routes------------------------------------------------

Route::prefix('admin')->group(function(){
	Route::get('login',[AdminController::class,'Index'])->name('login_form');
	Route::post('/login/admin',[AdminController::class,'Login'])->name('admin.login');
	Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/register',[AdminController::class,'AdminRegister'])->name('admin.register')->middleware('admin');
    Route::post('/register/create',[AdminController::class,'AdminRegisterCreate'])->name('admin.register.create')->middleware('admin');
    Route::get('/alladmins',[AdminController::class,'AdminAll'])->name('admin.all')->middleware('admin');
    Route::get('/addorganizer',[AdminController::class,'AddEventOrganizer'])->name('add.organizer')->middleware('admin');
    Route::post('/organizer/add',[AdminController::class,'AdminOrganizerAdd'])->name('admin.organizer.add')->middleware('admin');
    Route::get('/allorganizers',[AdminController::class,'OrganizerAll'])->name('organizer.all')->middleware('admin');
    Route::get('/edit/organizer/{id}',[AdminController::class, 'EditOrganizer'])->name('edit.organizer')->middleware('admin');
    Route::get('/delete/organizer/{id}',[AdminController::class, 'DeleteOrganizer'])->name('delete.organizer')->middleware('admin');
    Route::post('/update/organizer',[AdminController::class, 'UpdateOrganizer'])->name('update.organizer');
    Route::get('/allusers',[AdminController::class,'UsersAll'])->name('users.all')->middleware('admin');
    Route::get('/delete/user/{id}',[AdminController::class, 'DeleteUser'])->name('delete.user')->middleware('admin');
    Route::get('/admin/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::get('/edit/profile',[AdminController::class, 'EditProfile'])->name('edit.profile')->middleware('admin');
    Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile')->middleware('admin');
    Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin');
    //********************************event category***********************************************************************/
    Route::get('/all/event/category',[CategoryController::class,'AllEventCategory'])->name('all.event.category');
    Route::get('/add/event/category',[CategoryController::class, 'AddEventCategory'])->name('add.event.category');
    Route::post('/store/event/category',[CategoryController::class, 'StoreEventCategory'])->name('store.event.category');
    Route::get('/edit/event/category/{id}',[CategoryController::class, 'EditEventCategory'])->name('edit.event.category');
    Route::post('/update/event/category/{id}',[CategoryController::class, 'UpdateEventCategory'])->name('update.event.category');
    Route::get('/delete/event/category/{id}',[CategoryController::class, 'DeleteEventCategory'])->name('delete.event.category');
    //***********************************Events********************************************************************/ 
    Route::get('/all/event',[EventController::class, 'AllEvent'])->name('all.event');
    Route::get('/add/event',[EventController::class, 'AddEvent'])->name('add.event');
    Route::post('/store/event',[EventController::class, 'StoreEvent'])->name('store.event');
    Route::get('/edit/event/{id}',[EventController::class, 'EditEvent'])->name('edit.event');
    Route::post('/update/event',[EventController::class, 'UpdateEvent'])->name('update.event');
    Route::get('/delete/event/{id}',[EventController::class, 'DeleteEvent'])->name('delete.event');
    //**********************************Subscribe All Route*************************************************************
    Route::post('/store/subscribe',[SubscriberController::class, 'StoreSubscribe'])->name('store.subscribe');
    Route::get('/subscribe/email',[SubscriberController::class, 'SubscribeEmail'])->name('subscribe.email');   
    Route::get('/delete/subscribe/{id}',[SubscriberController::class, 'DeleteSubscribe'])->name('delete.subscribe');  
    //**********************************Contact Messages************************************************************** */
    Route::get('/contact/message',[ContactController::class, 'ContactMessage'])->name('contact.message'); 
    Route::get('/delete/message/{id}',[ContactController::class, 'DeleteMessage'])->name('delete.message');
    Route::post('/store/message',[ContactController::class, 'StoreMessage'])->name('store.message');
    //***********************************Quires Contact*****************************************************************/ 
    Route::get('/contact/quirey',[QuieryController::class, 'ContacQuery'])->name('contact.quirey');
    Route::get('/delete/quirey/{id}',[QuieryController::class, 'DeleteQuery'])->name('delete.quirey');
    Route::get('/edit/quirey/{id}',[QuieryController::class, 'EditQuery'])->name('edit.quiery');
    Route::post('/update/query',[QuieryController::class, 'UpdateQuery'])->name('update.query');
    /***********************************Tickets ************************************************************************ */
    Route::get('/all/ticket',[TicketController::class, 'AllTicket'])->name('all.ticket');
    Route::get('/add/ticket',[TicketController::class, 'AddTicket'])->name('add.ticket');
    Route::post('/store/ticket',[TicketController::class, 'StoreTicket'])->name('store.ticket');
    Route::get('/view/ticket/{id}',[TicketController::class, 'ViewTicket'])->name('view.ticket');
    Route::get('/delete/ticket/{id}',[TicketController::class, 'DeleteTicket'])->name('delete.ticket');
    Route::get('ticket/print/{id}',[TicketController::class,'PrintTicket'])->name('print.ticket');
    Route::get('/report/ticket',[TicketController::class, 'ReportTicket'])->name('report.ticket');
    Route::post('report/search',[TicketController::class, 'SearchTicket'])->name('search.ticket');
    //***************************************Testimonials************************************************************ */
    Route::get('/testimonials',[TestimonialController::class, 'TestimonialsUsers'])->name('user.totestimonials'); 
    Route::get('/delete/testimonial/{id}',[TestimonialController::class, 'DeleteTestimonial'])->name('delete.testimonial'); 
    Route::get('/view/testimonial/{id}',[TestimonialController::class, 'ViewTestimonial'])->name('view.testimonial');
    Route::post('/update/testimonial',[TestimonialController::class, 'UpdateTestimonial'])->name('update.testimonial');
});

//-----------------------------------End Admin Routes--------------------------------------------
//-----------------------------------Event Organizer Routes------------------------------------------------

Route::prefix('organizer')->group(function(){
	Route::get('login',[OrganizerController::class,'Index'])->name('organizer_login_form');
    Route::post('/login/organizer',[OrganizerController::class,'Login'])->name('organizer.login');
    Route::get('/dashboard',[OrganizerController::class,'Dashboard'])->name('organizer.dashboard')->middleware('organizer');
    Route::get('/logout',[OrganizerController::class,'OrganizerLogout'])->name('organizer.logout')->middleware('organizer');
    Route::get('/organizer/profile',[OrganizerController::class, 'Profile'])->name('organizer.profile')->middleware('organizer');
    Route::get('/edit/profile',[OrganizerController::class, 'EditProfile'])->name('edit.profile1')->middleware('organizer');
    Route::post('/store/profile',[OrganizerController::class, 'StoreProfile'])->name('store.profile1')->middleware('organizer');
    Route::get('/change/password',[OrganizerController::class, 'ChangePassword'])->name('change.password1')->middleware('organizer');
    Route::post('/update/password',[OrganizerController::class, 'UpdatePassword'])->name('update.password')->middleware('organizer');
    //********************************event category***********************************************************************/
    Route::get('/all/event/category',[CategoryController::class,'AllEventCategory1'])->name('all.event.category1');
    Route::get('/add/event/category',[CategoryController::class, 'AddEventCategory1'])->name('add.event.category1');
    Route::post('/store/event/category',[CategoryController::class, 'StoreEventCategory1'])->name('store.event.category1');
    Route::get('/edit/event/category/{id}',[CategoryController::class, 'EditEventCategory1'])->name('edit.event.category1');
    Route::post('/update/event/category/{id}',[CategoryController::class, 'UpdateEventCategory1'])->name('update.event.category1');
    Route::get('/delete/event/category/{id}',[CategoryController::class, 'DeleteEventCategory'])->name('delete.event.category1');
    //***********************************Events********************************************************************/ 
    Route::get('/all/event',[EventController::class, 'AllEvent1'])->name('all.event1');
    Route::get('/add/event',[EventController::class, 'AddEvent1'])->name('add.event1');
    Route::post('/store/event',[EventController::class, 'StoreEvent1'])->name('store.event1');
    Route::get('/edit/event/{id}',[EventController::class, 'EditEvent1'])->name('edit.event1');
    Route::post('/update/event',[EventController::class, 'UpdateEvent1'])->name('update.event1');
    Route::get('/delete/event/{id}',[EventController::class, 'DeleteEvent'])->name('delete.event1');
    /***************************************Tickets****************************************************************** */
    Route::get('/all/ticket',[TicketController::class, 'AllTicket1'])->name('all.ticket1');
    Route::get('/view/ticket/{id}',[TicketController::class, 'ViewTicket1'])->name('view.ticket1');
    Route::get('ticket/print/{id}',[TicketController::class,'PrintTicket1'])->name('print.ticket1');
    Route::get('/report/ticket',[TicketController::class, 'ReportTicket1'])->name('report.ticket1');
    Route::post('report/search',[TicketController::class, 'SearchTicket1'])->name('search.ticket1');
    Route::get('/add/ticket',[TicketController::class, 'AddTicket1'])->name('add.ticket1');
    Route::post('/store/ticket',[TicketController::class, 'StoreTicket1'])->name('store.ticket1');
    Route::get('/pending/ticket',[TicketController::class, 'PendingTicket'])->name('pending.ticket'); 
    Route::get('/view/pen_ticket/{id}',[TicketController::class, 'ViewPenTicket'])->name('view.penticket');
    
    Route::post('/update/pen_ticket',[TicketController::class, 'UpdatePenTicket'])->name('update.pen_ticket');
}); 

//-----------------------------------End Event Organizer Routes--------------------------------------------
//***********************************Main Frontend************************************************* */
Route::get('/', function () { return view('frontend.index'); });
Route::get('/contact',[ContactController::class, 'Contact'])->name('contact.me');
Route::get('/about',[TicketController::class, 'Homeabout'])->name('home.about');
Route::get('/event',[EventController::class, 'HomeEvent'])->name('home.event');
Route::get('/ticket',[TicketController::class, 'HomeTicket'])->name('home.ticket');
Route::get('/ticket/details/{id}',[TicketController::class, 'TicketDetails'])->name('ticket.details');
Route::post('/store/subscribe',[SubscriberController::class, 'StoreSubscribe'])->name('store.subscribe');
Route::get('/category/ticket/{id}',[TicketController::class, 'CategoryTicket'])->name('category.ticket');


//***********************************EndMain Frontend************************************************* */
//************************************User Routes******************************************** */
Route::get('/user/profile',[UserController::class, 'Profile'])->name('user.profile');
Route::get('/user/logout',[UserController::class, 'destroy'])->name('user.logout');
Route::post('/store/profile',[userController::class, 'StoreProfile'])->name('store.profile1');
Route::get('/change/password',[UserController::class, 'ChangePassword'])->name('user.change.password');
Route::post('/update/password',[UserController::class, 'UpdatePassword'])->name('update.password');
Route::get('/add/testimonial',[TestimonialController::class, 'Testimonial'])->name('user.add.testimonial');
Route::post('/store/testimonial',[TestimonialController::class, 'StoreTestimonial'])->name('store.testimonial');

Route::get('/view/ticket/{id}',[TicketController::class, 'ViewUserTicket'])->name('view.userticket');

Route::post('/book/userticket',[TicketController::class, 'BookUserTicket'])->name('book.userticket');
Route::get('/my/tickets',[TicketController::class, 'MyTickets'])->name('user.mytickets');

Route::get('/ticket/checkout/{id}',[TicketController::class, 'TicketCheckout'])->name('ticket.checkout');

Route::post('/ticket/usercheckout',[TicketController::class, 'CheckoutTicket'])->name('ticket.usercheckoutticket');

Route::get('/ticket/info/{id}',[TicketController::class, 'TicketInfo'])->name('ticket.info');
Route::get('/ticket/sell/{id}',[TicketController::class, 'TicketSell'])->name('ticket.sell');

Route::post('/sell/userticket',[TicketController::class, 'SellUserTicket'])->name('sell.userticket');
















Route::get('/dashboard', function () {
    return view('frontend.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
