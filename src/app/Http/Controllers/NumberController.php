<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    //入力画面
    public function index()
    {
        return view('number.index');
    }

    //確認画面
    public function confirm(Request $request)
    {
        $data = $request->all();
        $request->session()->put($data);
        return view('number.comfirm', compact("data"));
    }

    //完了画面
    public function complete()
    {
        $data = session()->all();
        DB::table('people')->insert([
            'adlut_number' => $data["adlut_number"],
            'child_number' => $data["email"]
        ]);
        return view('number.complete');
    }
}
