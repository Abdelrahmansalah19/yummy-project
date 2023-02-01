<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\AddMenu;
use App\Models\Contact;
use App\Models\AddChief;
use App\Models\AddGallary;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  index()
    {
        $user = User::all()->count();
        $message = Contact::all()->count();
        $order = Book::all()->count();
        $addchief = AddChief::all()->count();
        $addmenu = AddMenu::all()->count();
        $gallary = AddGallary::all()->count();

        return view('front.dashboard',compact('addchief','addmenu','gallary','order','user','message'));

    }
}
