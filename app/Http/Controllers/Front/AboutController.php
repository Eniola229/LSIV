<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AboutController extends Controller
{
    public function whoweare()
    {
        $blogs = Blog::all(); 
        return view('Front.about.WhoWeAre', compact('blogs'));
    }
    public function ourjouney()
    {
        return view('Front.about.OurJouney');
    }
    public function thematics()
    {
        return view('Front.about.Thematics');
    }
    public function founder()
    {
        return view('Front.about.Founder');
    }
}
