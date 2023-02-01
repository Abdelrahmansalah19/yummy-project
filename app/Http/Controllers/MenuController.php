<?php

namespace App\Http\Controllers;

use App\Models\AddMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $addmenu = AddMenu::all();
        return view('front.menu',compact('addmenu'));
    }
}

