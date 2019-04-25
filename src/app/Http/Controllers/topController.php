<?php

namespace App\Http\Controllers;

use App\information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $campInfo = Information::find(1);
        return view('top');
    }
}

