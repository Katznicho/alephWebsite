<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Leader;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        $socialMedia =  SocialMedia::first();
        $contact =  Contact::first();
        $aboutus =  AboutUs::first();
        $leaders =  Leader::all();
       
    // dd($leaders);
        return view('pages.aboutus', compact('socialMedia', 'contact', 'aboutus', 'leaders'));
    }
}
