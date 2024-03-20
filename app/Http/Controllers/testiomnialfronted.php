<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class testiomnialfronted extends Controller
{
   public function testiomnial(){
       $alltestimonial = testimonial::all();
       return view('fronted.testiomnial',compact('alltestimonial'));
   } 
}
