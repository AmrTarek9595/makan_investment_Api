<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\contact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Mail\subscribeMail;
use App\Mail\contactMail;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('site.home');
});

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/partners', function () {
    return view('site.partners');
})->name('partners');


Route::get('/about', function () {
    return view('site.about');
})->name('about');
Route::get('/services', function () {
    return view('site.services');
})->name('services');


Route::post('/message', function (Request $request) {
    $data = [
        "name" => $request->name,
        "email" => $request->email,
        "subject" => $request->subject,
        "message" => $request->message,
        "phone" => $request->phone,


    ];
    $inserted = contact::create($data);
    if($inserted){
        Mail::to('info@makaninvestment.ae')->send(new contactMail($data));
        return redirect('/')->with('success' , "Your Form Has been sent successfully");
    }
    else{
        return redirect('/')->with('error' , "Something Went Wrong");

    }

})->name('message');

Route::post('/subscribe', function (Request $request) {
    $data = [
        "email" => $request->email,
        "name" => $request->name,
    ];
    $inserted = Subscription::create($data);
    if($inserted){
        Mail::to($request->email)->send(new subscribeMail($data));
        return redirect('/')->with('success' , "Your form has been submitted successfully!");
    }
    else{
        return redirect('/')->with('error' , "Something went wrong");

    }
})->name('subscribe');
Route::get('/register' , function(){
    session()->flush();
    return redirect('/login');
});
Route::get('/logout' , function(){
    session()->flush();
    return redirect('/login');
});
Route::get('/admin' , function(){
    return view('dashboard.home');
})->middleware('auth');
Route::get('/admin/messages' , function(){
    $data = contact::all();
    return view('dashboard.contact' , compact('data'));
})->name('messages')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/formtonewpass', [App\Http\Controllers\makan_site_view::class, 'password_reset'])->name('formtonewpass-name');

