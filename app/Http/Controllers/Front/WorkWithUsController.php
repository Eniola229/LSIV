<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkWithUsController extends Controller
{
    public function service()
    {
        return view('Front.work.services');
    }
        public function work()
    {
        return view('Front.work.work');
    }
    public function Communication()
    {
        return view('Front.work.Communication');
    }
    public function Branding()
    {
        return view('Front.work.Branding');
    }
    public function Strategy()
    {
        return view('Front.work.Strategy');
    }
    public function Traning()
    {
        return view('Front.work.Training');
    }
    public function Engagement()
    {
        return view('Front.work.Engagement');
    }
    public function Program()
    {
        return view('Front.work.Program');
    }
    
}
