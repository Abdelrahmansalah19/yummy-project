<?php

namespace App\Http\Controllers;

use App\Models\AddMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addmenu = AddMenu::all();
        return view('dashboard.addmenu', compact('addmenu'));
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
                'salary'=>'required|int',
                'desc'=>"required|string|max:100",
                'img' => 'required|image|mimes:png,jpg',
            ]
        );
        $fileName=Storage::putFile("public/menu",$request->img);
        $data['img'] = $fileName;
        AddMenu::create($data);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddMenu  $addMenu
     * @return \Illuminate\Http\Response
     */
    public function show(AddMenu $addMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddMenu  $addMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddMenu $addMenu)
    {
        Storage::delete($addMenu->img);
        $addMenu->delete();
    }
}
