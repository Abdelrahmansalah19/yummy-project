<?php

namespace App\Http\Controllers;

use App\Models\AddChief;
use Illuminate\Http\Request;

class ChiefController extends Controller
{
    public function index()
    {
        $addchief = AddChief::all();
        return view('front.chief',compact('addchief'));
    }

}
