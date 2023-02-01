<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\AddMenu;
use App\Models\AddChief;
use App\Models\AddGallary;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $message = Contact::all()->count();
        $user = User::all()->count();
        $order = Book::all()->count();
        $addchief = AddChief::all()->count();
        $addmenu = AddMenu::all()->count();
        $gallary = AddGallary::all()->count();

        return view('front.dashboard',compact('addchief','addmenu','gallary','order','user','message'));
    }
}
