<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome'); 
// });


Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/partnerWithUs', function () {
    return view('partnerWithUs');
});
Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/workWithUs', function () {
    return view('workWithUs');
});

Route::get('user-details', function () {
    return view('user-details');
});

Route::post('user-details-save', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $contact = $request->input('contact');

    $query = "INSERT INTO `user_details`(`name`, `email`, `contact`) VALUES ('$name', '$email', '$contact')";
    $users = DB::select($query);

    session()->flash('success', 'Sucessfully');
    return redirect()->back();
});

Route::get('user_help', function () {
    return view('user_help');
});

Route::post('user-help-save', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $contact = $request->input('contact');
    $selectServices = $request->input('selectServices');
    $yourQuery = $request->input('yourQuery');

    $query = "INSERT INTO `user_help`(`name`, `email`, `contact`, `selectServices`, `yourQuery`) VALUES ('$name', '$email', '$contact', '$selectServices', '$yourQuery')";
    $users = DB::select($query);

    session()->flash('saved', 'Your query is sucessfully saved');
    return redirect()->back();
});

Route::post('user-hire-save', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $contact = $request->input('contact');
    $vaccancies = $request->input('vaccancies');
    $resume = $request->file('resume');

    $query = "INSERT INTO `user_hire`(`name`, `email`, `contact`, `vaccancies`, `resume`) VALUES ('$name', '$email', '$contact', '$vaccancies', '$resume')";
    $users = DB::select($query);

    session()->flash('hired', 'Successfully Apply');
    return redirect()->back();
});