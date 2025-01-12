<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GiveController;
use App\Http\Controllers\WelcomeController;
use App\Models\Gallery;
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
    // return view('welcome');
    return redirect()->route('home');
})->name("home");

Route::get('/home', [WelcomeController::class, 'index'])->name('home');
Route::get("/aboutus", [AboutUsController::class, "index"])->name("aboutus");
Route::get("contact", [AboutUsController::class, "index"])->name("contact");
Route::get("give", [GiveController::class, "index"])->name("give");
Route::get("gallery", [GalleryController::class, "index"])->name("gallery");
Route::get("calendar", [AboutUsController::class, "index"])->name("calendar");
//donations
Route::get("/donations", [DonationController::class, "index"])->name("donations");




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
Route::get("/donations", [DonationController::class, "index"])->name("donations");

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
