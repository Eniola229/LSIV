<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitiativesController extends Controller
{
    public function initiatives(Request $request)
    {
        return view('Front.initiatives.initiatives');
    }
}
