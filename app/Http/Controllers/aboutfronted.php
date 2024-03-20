<?php

namespace App\Http\Controllers;

use App\Models\aboutmodel;
use Illuminate\Http\Request;

class aboutfronted extends Controller
{
    public function about(){
        $allabout = aboutmodel::all();
        return view('fronted.about',compact('allabout'));
    }
}
