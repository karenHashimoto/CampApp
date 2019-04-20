<?php

namespace App\Http\Controllers;

use App\imformations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class topController extends Controller
{
    public function index(Request $request)
    {
        // $imformations =DB::table(information);
        return view('top');
    }
}

