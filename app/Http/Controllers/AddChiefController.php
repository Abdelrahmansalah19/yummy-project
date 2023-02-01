<?php

namespace App\Http\Controllers;

use App\Models\AddChief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddChiefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addchief = AddChief::all();
        return view('dashboard.newchief',compact('addchief'));
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
                'name'=>'required|string|min:3|max:20',
                'degree'=>'required|string',
                'desc'=>"required|string|max:100",
                'img' => 'required|image|mimes:png,jpg',
            ]
        );
        $fileName=Storage::putFile("public/chief",$request->img);
        $data['img'] =$fileName;
        AddChief::create($data);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddChief  $addChief
     * @return \Illuminate\Http\Response
     */
    public function show(AddChief $addChief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddChief  $addChief
     * @return \Illuminate\Http\Response
     */
    public function edit(AddChief $addChief)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddChief  $addChief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddChief $addChief)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddChief  $addChief
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddChief $addChief)
    {
        //
    }
}
