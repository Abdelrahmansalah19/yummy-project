<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YammyController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
}
