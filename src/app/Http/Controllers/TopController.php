<?php

namespace App\Http\Controllers;

use App\Information;

use Illuminate\Http\Request;
use App\Camp;
use App\Point;
use App\Titles;

class TopController extends Controller
{
    //
    public function index(Request $req)
    {
        $camps1 = Information::whereIn('id', [1, 2, 3])->get();
        $camps2 = Information::whereIn('id', [4, 5, 6])->get();
        $camps3 = Information::whereIn('id', [7, 8, 9])->get();



        // $camps1 = \DB::table('camps')->whereIn();
        // $picture1 = Picture::find($camps1[0]->id);
        // $picture2 = Picture::find($camps1[1]->id);
        // $picture3 = Picture::find($camps1[2]->id);
        // $campTitle1 = Title::find(1);
        // $camps2 = Information::whereIn('id', [4, 5, 6])->get();
        // dd($camps);
        return view('top')->with(['informations' => [], 'camps1' => $camps1, 'camps2' => $camps2, 'camps3' => $camps3, 'campInfo' => []]);
    }
}
