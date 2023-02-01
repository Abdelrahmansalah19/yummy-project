<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function index()
  {
        $message = Book::all();
        return view('dashboard.order',compact('message'));
  }
}
