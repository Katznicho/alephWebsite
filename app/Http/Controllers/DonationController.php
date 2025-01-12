<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Leader;
use App\Models\SocialMedia;

class DonationController extends Controller
{
    //
    public function index(){
        $socialMedia =  SocialMedia::first();
        $contact =  Contact::first();
        $aboutus =  AboutUs::first();
        $leaders =  Leader::all();
       
    // dd($leaders);
        return view('pages.donation', compact('socialMedia', 'contact', 'aboutus', 'leaders'));
    }
}
