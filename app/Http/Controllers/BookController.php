<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePostRequest;

class BookController extends Controller
{
    public function index()
    {
        return view('front.book');
    }
    public function store(StorePostRequest $request)
    {

            Book::create([

            'name'  =>  $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'date'  =>  $request->get('date'),
            'time'  =>  $request->get('time'),
            'people'=> $request->get('people'),
            'message'=>  $request->get('message'),

            ]);
        return redirect('/book');
    }
}
