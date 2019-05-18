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
}
