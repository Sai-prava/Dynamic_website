<?php

namespace App\Http\Controllers;

use App\Models\aboutmodel;
use App\Models\bookingModel;
use App\Models\dinnerModel;
use App\Models\heroModel;
use App\Models\lunchModel;
use App\Models\menuModel;
use App\Models\serviceModel;
use App\Models\teamModel;
use App\Models\testimonial;
use Illuminate\Http\Request;

class indexfronted extends Controller
{
    //
    public function index(){
        $allheroSection = heroModel::all(); 
        $allService = serviceModel::all();
        $allabout = aboutmodel::all();
        $allmenu = menuModel::all();
        $allLunch = lunchModel::all();
        $alldinner = dinnerModel::all();
        $allteam = teamModel::all();
        $alltestimonial = testimonial::all();
             
        return view('fronted.index',compact('allheroSection','allService','allabout','allmenu','allLunch','alldinner','allteam','alltestimonial'));
    }
}
