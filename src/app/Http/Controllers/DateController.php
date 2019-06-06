<?php

namespace App\Http\Controllers;

use App\Camp;
use App\Person;
use App\Date;
use App\Http\Requests\PeoplePost;

use Illuminate\Http\Request;

class DateController extends Controller
{
    
    public function index(PeoplePost $request)
    {

        $camps = Camp::find($request->camp_id);
        $adult_number = $request->adult_number;
        $child_number = $request->child_number;

        

        $request->session()->put('camps', $camps);
        $request->session()->put('adult_number', $adult_number);
        $request->session()->put('child_number', $child_number);


        return view('date', ['camps' => $camps, ]);
    }
}
