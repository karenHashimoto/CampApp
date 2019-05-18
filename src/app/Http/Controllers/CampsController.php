<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \App\Camp;
use \App\Title;
use Illuminate\Http\Request;

class CampsController extends Controller
{
    //
    public function index(Request $request)
    {
        $titles1 = Title::find(1);
        $titles2 = Title::find(2);
        $titles3 = Title::find(3);

        $camps1 = Camp::whereIn('id', [1, 2, 3])->get();
        $camps2 = Camp::whereIn('id', [4, 5, 6])->get();
        $camps3 = Camp::whereIn('id', [7, 8, 9])->get();


        return view('top', ['camps1' => $camps1, 'camps2' => $camps2, 'camps3' => $camps3, 'titles1' => $titles1, 'titles2' => $titles2, 'titles3' => $titles3]);
    }
}
