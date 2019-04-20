<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function detail($id)
    {
        dd($id);
        // $campInfo = Camp::find($id);
        return view('detail');
    }
}
