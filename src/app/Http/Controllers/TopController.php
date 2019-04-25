<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function index(Request $req)
    {
        $info = Information::find(1);
        // dd($info);
        return view('top')->with(['informations' => [], 'info1' => $info, 'campInfo' => []]);
    }
}
