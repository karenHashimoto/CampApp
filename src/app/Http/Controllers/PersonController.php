<?php

namespace App\Http\Controllers;

use App\Camp;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index($id)
    {
        $camps = Camp::find($id);

        return view('people', ['camps' => $camps]);
    }

    //人数登録処理関数
    public function store(Request $request)
    {



        // $adlut_number = $request->adlut_number;
        // $child_number = $request->child_number;


        // $adlut_number = Request::input('adlut_number');
        // $child_number = Request::input('child_number');

        $adlut_number = $request->adlut_number;
        $child_number = $request->child_number;


        // dd($adlut_number);
        // dd($child_number);




        // $number = $request->input('number');
        // $people = new People;
        // $people->adlut_number = $request->adlut_number;
        // $people->child_number = $request->child_number;

        // dd($people);

        // $people->save();
        return view('date', ['camps->$camps', 'adlut_number' => $adlut_number, 'child_number' => $child_number]);
    }


    //人数表示処理関数
    public function confirm()
    { }
}
