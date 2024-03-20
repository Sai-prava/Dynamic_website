<?php

namespace App\Http\Controllers;

use App\Models\teamModel;
use Illuminate\Http\Request;

class teamfronted extends Controller
{
    public function team(){
        $allteam = teamModel::all();
        return view('fronted.team',compact('allteam'));
    }
}
