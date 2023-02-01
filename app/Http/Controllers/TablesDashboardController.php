<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesDashboardController extends Controller
{
   public function index()
   {
        return view('front.tables-dashbooard');
   }
}
