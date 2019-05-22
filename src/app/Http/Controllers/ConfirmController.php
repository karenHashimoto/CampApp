<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Date;
use App\Perosn;
use App\Rental_car;
use App\Rental_item;

class ConfirmController extends Controller
{
    public function index(Request $request)
    {

        // dd($request);
        $camps = Camp::find($request->camp_id);
        $adlut_number = $request->adlut_number;
        $child_number = $request->child_number;
        $inDate = $request->inDate;
        $outDate = $request->outDate;
        $isItemRental = $request->isItemRental;
        

        if ($request->has('car_yes')) {
            $isCarRental = '1';
        } else {
            $isCarRental = '0';
        }



        return view('confirm', [
            'camps' => $camps,
            'adlut_number' => $adlut_number,
            'child_number' => $child_number,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'isItemRental' => $isItemRental,
            'isCarRental' => $isCarRental
        ]);
    }
}
