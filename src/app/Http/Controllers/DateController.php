<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Person;


class DateController extends Controller
{
    public function index($id)
    {
        $camps = Camp::find($id);
        return view('date', ['camps' => $camps]);
    }
}
