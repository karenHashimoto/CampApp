<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Point;
use App\Camp_Point;

class Test_02Controller extends Controller
{
   public function index($id){

    // $points = Point::find($id);

    // return view('test_02',['points' => $points]);


   //  $camp = \App\Camp::with('points')->get();
   //  print_r($camp->toArray());

    $camp = Camp::findOrFail(1);


   }
    
}
