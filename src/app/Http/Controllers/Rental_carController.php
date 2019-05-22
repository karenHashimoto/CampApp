<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Date;
use App\Perosn;

class Rental_carController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->has('car_yes'), $request->has('car_no'));
        $camps = Camp::find($request->camp_id);
        $adlut_number = $request->adlut_number;
        $child_number = $request->child_number;
        $inDate = $request->inDate;
        $outDate = $request->outDate;

        if ($request->has('item_yes')) {
            $isItemRental = '1';
        } else {
            $isItemRental = '0';
        }
       


        return view('rental_car', [
            'camps' => $camps,
            'adlut_number' => $adlut_number,
            'child_number' => $child_number,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'isItemRental' => $isItemRental
        ]);
    }
}