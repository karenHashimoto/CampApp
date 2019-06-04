<?php

namespace App\Http\Controllers;

use App\Camp;
use App\Person;
use App\Date;

use Illuminate\Http\Request;

class DateController extends Controller
{
    // public function index($id)
    // {
    //     $camps = Camp::find($id);

    //     return view('date', ['camps' => $camps]);
    // }
    public function index(Request $request)
    {

        $camps = Camp::find($request->camp_id);
        $adult_number = $request->adult_number;
        $child_number = $request->child_number;

        $request->session()->put('camps', $camps);
        $request->session()->put('adult_number', $adult_number);
        $request->session()->put('child_number', $child_number);


        return view('date', ['camps' => $camps, 'adult_number' => $adult_number, 'child_number' => $child_number]);
    }
}
