<?php

namespace App\Http\Controllers;

use App\Camp;
use App\Person;
use Illuminate\Http\Request;


class PersonController extends Controller
{
    public function index(Request $request, $id)
    {
        // $request->session()->flush();


        $camps = Camp::find($id);



        return view('people', ['camps' => $camps]);
    }
}
