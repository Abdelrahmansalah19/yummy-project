<?php

namespace App\Http\Controllers;

use view;
use App\Models\AddGallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddGallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary = AddGallary::all();
        return view('dashboard.addgallary',compact('gallary'));

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate(
            [
                'img' => 'required|image|mimes:png,jpg',
            ]
        );
        $fileName=Storage::putFile("public/gallary",$request->img);
        $data['img'] =$fileName;
        AddGallary::create($data);

        return redirect('/dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddGallary  $addGallary
     * @return \Illuminate\Http\Response
     */
    public function show(AddGallary $addGallary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddGallary  $addGallary
     * @return \Illuminate\Http\Response
     */
    public function edit(AddGallary $addGallary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddGallary  $addGallary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddGallary $addGallary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddGallary  $addGallary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddGallary $addGallary)
    {
        //
    }
}
