<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
public function index()
{
        $contact = Contact::all();
        return view('dashboard.message',compact('contact'));
}

}
