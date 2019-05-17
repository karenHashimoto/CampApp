<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Point;
use App\Point_Master;
use App\Facility;
use App\Facility_Master;


class Test_02Controller extends Controller
{
   public function index($id){

    // $points = Point::find($id);

    // return view('test_02',['points' => $points]);


   //  $camp = \App\Camp::with('points')->get();
   //  print_r($camp->toArray());

   //  $camp = Camp::findOrFail(5);
   //     $camp->points->point_masters;
   //     dd($camp);
   //     return view('test_02',['camp'=>$camp]);

   // $camp = Camp::findOrFail($id);




      //  $camp->points;

      //  $path = $point->point_masters->path;
      //  $path = $point;
       
      //  dd($path);
   
   
   
   
   
   $camps = Camp::all();
   foreach($camps as $camp){
      $points = $camp->points;

      foreach($points as $point){
         $path = $point->point_master->path;
      }
   }



   // foreach($camps  as $a){
   //    dd($a ->points);
   // }
  
   // $points =$camp->points;   

   //    foreach($points as $point){
   //    dd($point = $camp->point);
   // }
    


   // @forelse($points as $point)
   //    dd($points = $camp->points);
  
      // @foreach($points as $point){
      //     dd($path = $point->point_master->path);
      // }
      // @endforeach
//   @empty
//   @endelse





 
   // dd($camps);
   // $points = $camps->points;
   // dd($points);
//    @foreach($camps as $camp){
//       $points = $camps->points;
  
//       @foreach($points as $point){
//           $path = $points->point_masters->path;
//       }
//       @endforeach
//    }
//   @endforeach
   
   // // $point = $camps->points;
   // dd($camps);
   return view('test_02',['camps' => $camp]);
   



   }
    
}
