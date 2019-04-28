<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Camp;
use App\Title;
use Illuminate\Http\Request;

class Test_DetailController extends Controller
{
    // public function index(Request $request){
        // $camps = DB::select('select * from camps');
        // $camps1= Camp::whereIn('id',[1, 2, 3])->get();
        // $camps2= Camp::whereIn('id',[4, 5, 6])->get();
        // $camps3= Camp::whereIn('id',[7, 8, 9])->get();
        
        // return view('test_detail',['camps1' => $camps1 , 'camps2' => $camps2 , 'camps3' => $camps3]);
   
        public function index($id){
            $camps = Camp::find($id);
            $titles = Title::find($id);

            // 必要なテーブル
            //point piture facility
            





            return view('test_detail',['camps' => $camps , 'titles' => $titles]);
            // return view('test_detail',['titles' => $titles]);         
   
   
   
    }
}
