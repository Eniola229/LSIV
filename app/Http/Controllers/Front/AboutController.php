<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function whoweare(Request $request)
    {
        return view('Front.about.WhoWeAre');
    }
    public function ourjouney(Request $request)
    {
        return view('Front.about.OurJouney');
    }
    public function thematics(Request $request)
    {
        return view('Front.about.Thematics');
    }
    public function founder(Request $request)
    {
        return view('Front.about.Founder');
    }
}
