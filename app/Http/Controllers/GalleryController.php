<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(){
        $socialMedia =  SocialMedia::first();
        $contact =  Contact::first();

        // Fetch gallery images with pagination (e.g., 12 items per page)
        $galleries = Gallery::paginate(12);
        
        return view('pages.gallery', compact('socialMedia', 'contact', 'galleries'));
    }
}
