<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitiativesController extends Controller
{
    public function initiatives()
    {
        return view('Front.initiatives.initiatives');
    }

    public function Adopt()
    {
        return view('Front.initiatives.Adopt');
    }

    public function MyBodyIsMine()
    {
        return view('Front.initiatives.MyBodyIsMine');
    }
    public function Lolocythia()
    {
        return view('Front.initiatives.Lolocythia-show');
    }
    public function Nodaysoff()
    {
        return view('Front.initiatives.Nodaysoff');
    }
    public function Storiesunhear()
    {
        return view('Front.initiatives.Storiesunhear');
    }
    public function Conversation()
    {
        return view('Front.initiatives.The-conversation');
    }
    
}
