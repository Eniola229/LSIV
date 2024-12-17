<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class InsightsController extends Controller
{
    public function case(Request $request)
    {
        $blogs = Blog::all();
        return view('Front.insights.case', compact('blogs'));
    }
    public function media(Request $request)
    {
        return view('Front.insights.media');
    }
}
