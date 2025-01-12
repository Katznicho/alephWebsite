<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\SocialMedia;

class GiveController extends Controller
{
    //
    public function index(){
        $socialMedia =  SocialMedia::first();
        $contact =  Contact::first();
        // dd($socialMedia->youtube);
        return view('pages.give', compact('socialMedia', 'contact'));
    }
}
