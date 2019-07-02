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
        $adult_number = $request->adult_number;
        $child_number = $request->child_number;
        $inDate = $request->inDate;
        $outDate = $request->outDate;
        $isItemRental = $request->isCarRental;



        if ($request->has('Car_yes')) {
            $isCarRental = '1';
        } else {
            $isCarRental = '0';
        }

        $request->session()->put('isCarRental', $isCarRental);




        return view('rental_car', [
            'camps' => $camps,
            'adult_number' => $adult_number,
            'child_number' => $child_number,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'isItemRental' => $isItemRental
        ]);
    }
}
