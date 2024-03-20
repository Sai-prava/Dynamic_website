<?php

namespace App\Http\Controllers;

use App\Models\serviceModel;
use Illuminate\Http\Request;

class servicefronted extends Controller
{
    public function service(){
        $allService = serviceModel::all();
        return view('fronted.service',compact('allService'));
    }
}
