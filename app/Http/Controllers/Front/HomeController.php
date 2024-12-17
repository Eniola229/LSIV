<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;


class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('welcome', compact('blogs'));
    }
    public function blog($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::all();
         // Find the index of the current blog
        $currentBlogIndex = $blogs->search(fn($blog) => $blog->id == $id);

            if (!$blog) {
                return redirect()->back()->with('error', 'Blog not found.');
        }

        return view('Front.case.index', compact('blog', 'blogs', 'currentBlogIndex')); 
    }
}

