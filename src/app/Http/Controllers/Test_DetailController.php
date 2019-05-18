<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Camp;
use App\Title;
<<<<<<< HEAD
// use App\Point;
=======
use App\Point;
use App\Point＿Master;
>>>>>>> f348b15bb6eb52985bbe0995ceaea8471c8429af
use Illuminate\Http\Request;

class Test_DetailController extends Controller
{
    // public function index(Request $request){
<<<<<<< HEAD
    // $camps = DB::select('select * from camps');
    // $camps1= Camp::whereIn('id',[1, 2, 3])->get();
    // $camps2= Camp::whereIn('id',[4, 5, 6])->get();
    // $camps3= Camp::whereIn('id',[7, 8, 9])->get();

    // return view('test_detail',['camps1' => $camps1 , 'camps2' => $camps2 , 'camps3' => $camps3]);

    public function index($id)
    {
        $camps = Camp::find($id);
        $titles = Title::find($id);

        // $points1 = Point::whereIn('id',[1, 2, 3])->get();
        // $points2 = Point::whereIn('id',[2, 3, 4])->get();
        // $points3 = Point::whereIn('id',[3, 4, 5])->get();
        // $points4 = Point::whereIn('id',[5, 1, 2])->get();
        // $points5 = Point::whereIn('id',[4, 2, 3])->get();
        // $points6 = Point::whereIn('id',[4, 1, 3])->get();
        // $points7 = Point::whereIn('id',[1, 1, 1])->get();
        // $points8 = Point::whereIn('id',[4, 1, 2])->get();
        // $points9 = Point::whereIn('id',[3, 2, 3])->get();



        // 必要なテーブル
        //piture facility






        return view('test_detail', ['camps' => $camps, 'titles' => $titles]);
        // return view('test_detail',['titles' => $titles]);         



=======
        // $camps = DB::select('select * from camps');
        // $camps1= Camp::whereIn('id',[1, 2, 3])->get();
        // $camps2= Camp::whereIn('id',[4, 5, 6])->get();
        // $camps3= Camp::whereIn('id',[7, 8, 9])->get();
        
        // return view('test_detail',['camps1' => $camps1 , 'camps2' => $camps2 , 'camps3' => $camps3]);
   
        public function index($id){
            $camps = Camp::find($id);
            $titles = Title::find($id);

        
            //  $points = $camps->points[0];
            //  dd($points->point_masters);

            // $camps = Camp::all();
//    foreach($camps as $camp){
//       $points = $camp->points;

//       foreach($points as $point){
//          $path = $point->point_master->path;
//       }
//    }
            
            // $points1 = Point::whereIn('id',[1, 2, 3])->get();
            // $points2 = Point::whereIn('id',[2, 3, 4])->get();
            // $points3 = Point::whereIn('id',[3, 4, 5])->get();
            // $points4 = Point::whereIn('id',[5, 1, 2])->get();
            // $points5 = Point::whereIn('id',[4, 2, 3])->get();
            // $points6 = Point::whereIn('id',[4, 1, 3])->get();
            // $points7 = Point::whereIn('id',[1, 1, 1])->get();
            // $points8 = Point::whereIn('id',[4, 1, 2])->get();
            // $points9 = Point::whereIn('id',[3, 2, 3])->get();
           
            

            // 必要なテーブル
            //piture facility
            





            return view('test_detail',['camps' => $camps , 'titles' => $titles]);
            // return view('test_detail',['titles' => $titles]);         
   
   
   
>>>>>>> f348b15bb6eb52985bbe0995ceaea8471c8429af
    }
}
