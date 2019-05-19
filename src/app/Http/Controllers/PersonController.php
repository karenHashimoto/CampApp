<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

        $number = $request->input('number');
        $people = new People;
        $people->adlut_number = $request->adlut_number;
        $people->child_number = $request->child_number;
        $people->save();
        return redirect('/date/{id}');
    }


    //人数表示処理関数
    public function confirm()
    { }
}
