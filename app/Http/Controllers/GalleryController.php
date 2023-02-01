<?php

namespace App\Http\Controllers;

use App\Models\AddGallary;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallary = AddGallary::all();
        return view('front.gallery',compact('gallary'));
    }
}
