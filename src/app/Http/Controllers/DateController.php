<?php

namespace App\Http\Controllers;

use App\Camp;
use App\Person;
use App\Date;
use App\Http\Requests\PeoplePost;

use Illuminate\Http\Request;

class DateController extends Controller
{
    // public function index($id)
    // {
    //     $camps = Camp::find($id);

    //     return view('date', ['camps' => $camps]);
    // }
    public function index(PeoplePost $request)
    {
        $camps = Camp::find($request->camp_id);
        $adlut_number = $request->adlut_number;
        $child_number = $request->child_number;


        return view('date', [
            'camps' => $camps,
            'adlut_number' => $adlut_number,
            'child_number' => $child_number
        ]);
    }
}
