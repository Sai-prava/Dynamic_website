<?php

namespace App\Http\Controllers;

use App\Models\dinnerModel;
use App\Models\lunchModel;
use App\Models\menuModel;
use Illuminate\Http\Request;

class menufronted extends Controller
{

public function menu(){
    $allmenu = menuModel::all();
    $allLunch = lunchModel::all();
    $alldinner = dinnerModel::all();
    return view('fronted.menu',compact('allmenu','allLunch','alldinner'));
}
}
