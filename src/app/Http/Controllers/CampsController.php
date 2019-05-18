<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Title;
use App\Point;

class CampsController extends Controller
{

    public function index(Request $request)
    {
        $camps1 = Camp::whereIn('id', [1, 2, 3])->get(); //collection_object





        // dd($camps1[1]->points);


        $camps2 = Camp::whereIn('id', [4, 5, 6])->get();


        $camps3 = Camp::whereIn('id', [7, 8, 9])->get();

        $titles1 = Title::find(1);
        $titles2 = Title::find(2);
        $titles3 = Title::find(3);


        return view('top', ['camps1' => $camps1, 'camps2' => $camps2, 'camps3' => $camps3, 'titles1' => $titles1, 'titles2' => $titles2, 'titles3' => $titles3]);
    }
}
