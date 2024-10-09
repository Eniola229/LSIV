<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function case(Request $request)
    {
        return view('Front.insights.case');
    }
    public function media(Request $request)
    {
        return view('Front.insights.media');
    }
}
