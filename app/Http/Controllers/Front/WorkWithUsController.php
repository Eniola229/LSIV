<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkWithUsController extends Controller
{
    public function service(Request $request)
    {
        return view('Front.work.services');
    }
        public function work(Request $request)
    {
        return view('Front.work.work');
    }
}
