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



       
        return view('top')->with(['informations' => [], 'camps1' => $camps1, 'camps2' => $camps2, 'camps3' => $camps3, 'campInfo' => []]);
    }
}
