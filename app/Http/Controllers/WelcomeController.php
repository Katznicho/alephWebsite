<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        $socialMedia =  SocialMedia::first();
        $contact =  Contact::first();
        // dd($socialMedia->youtube);
        return view('welcome', compact('socialMedia', 'contact'));
    }
}
