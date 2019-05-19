<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Camp;
use App\Title;
use App\Point;
use App\Point_Master;
use App\Facility;
use App\Facility_Master;
use App\Cg_Picture;
use App\Cg_Picture_Master;

class DetailController extends Controller
{
    public function index($id)
    {
        $camps = Camp::find($id);
        $titles = Title::find($id);
        // $cg_imgs = Cg_Picture_Master::whereIn('id',[1,10,19,28,38,46,55,64,73,81]);
        // dd($cg_imgs);
        // $points1 = Point::whereIn('id',[1, 2, 3])->get();
        // $points2 = Point::whereIn('id',[2, 3, 4])->get();
        // $points3 = Point::whereIn('id',[3, 4, 5])->get();
        // $points4 = Point::whereIn('id',[5, 1, 2])->get();
        // $points5 = Point::whereIn('id',[4, 2, 3])->get();
        // $points6 = Point::whereIn('id',[4, 1, 3])->get();
        // $points7 = Point::whereIn('id',[1, 1, 1])->get();
        // $points8 = Point::whereIn('id',[4, 1, 2])->get();
        // $points9 = Point::whereIn('id',[3, 2, 3])->get();


        //  foreach ($cg_pictures as $cg_picture) {
        //     dd($path = $cg_picture->cg_picture_master);

        // 必要なテーブル
        //piture facility


        return view('detail', ['camps' => $camps, 'titles' => $titles]);
        // return view('test_detail',['titles' => $titles]);         
    }
}
