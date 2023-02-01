<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail as FacadesMail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('front.contact');


    }
    public function store(Request $request){

        $request->validate(
        [
            'name'=>'required|string|min:3|max:20',
            'email'=>'required|email',
            'subject'=>"required|string|max:100",
            'message'=>"required|max:1000"
        ]);

        Contact::create([

        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        ]);

        return back()->with('success','your message sent successfully !');

    }
}
