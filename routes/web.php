<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get("/about", function () {
    return view("pages.aboutus");
})->name("about");

Route::get("/contact", function () {
    return view("pages.contactus");
})->name("contact");

//ministries-layout
Route::get("/ministries-layout", function () {
    return view("pages.ministries_layout");
})->name("ministries-layout");

//ministries single
Route::get("/ministries-single", function () {
    return view("pages.ministries_single");
})->name("ministries-single");

//sermons layout
Route::get("/sermons-layout", function () {
    return view("pages.sermons_layout");
})->name("sermons-layout");

//sermons single
Route::get("/sermons-single", function () {
    return view("pages.sermons_single");
})->name("sermons-single");

//donations
Route::get("/donations", function () {
    return view("pages.donation");
})->name("donations");

//thankyou
Route::get("/thankyou", function () {
    return view("pages.thankyou");
})->name("thankyou");

//single staff
Route::get("/single_staff", function () {
    return view("pages.staff_single");
})->name("single_staff");

//coming_soon
Route::get("/coming_soon", function () {
    return view("pages.coming_soon");
})->name("coming_soon");
