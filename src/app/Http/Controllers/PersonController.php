<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Camp;
use App\Person;
use App\People;

use Input;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index($id)
    {
        $camps = Camp::find($id);

        return view('people', ['camps' => $camps]);
    }

    //人数登録処理関数
    public function store()
    public function store(Request $request)
    {
$input = Input::all();

dd($input);
        $adlut_child = Input::get('adlut_child');
        $child_child = Input::get('child_child');
        $camp_id = Input::get('camp_id');




        $number = $request->input('number');
        $people = new People;
        $people->adlut_number = $request->adlut_number;
        $people->child_number = $request->child_number;

dd($people);

        $people->save();
        return redirect('/date/{id}');
    }


    //人数表示処理関数
    public function confirm()
    { }
}
