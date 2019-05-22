<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camp;
use App\Date;
use App\Perosn;
use App\Rental_car;
use App\Rental_item;


class Rental_itemController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
        $camps = Camp::find($request->camp_id);
        $adlut_number = $request->adlut_number;
        $child_number = $request->child_number;
        $inDate = $request->inDate;
        $outDate = $request->outDate;

        // if ($request->has('item_yes')) {
        //     $isItemRental = true;
        // } else {
        //     $isItemRental = false;
        // }


        return view('rental_item', [
            'camps' => $camps,
            'adlut_number' => $adlut_number,
            'child_number' => $child_number,
            'inDate' => $inDate,
            'outDate' => $outDate,
        ]);


        // return view('rental_item', ['camps' => $camps, 'adlut_number' => $adlut_number, 'child_number' => $child_number, 'inDate' => $inDate, 'outDate' => $outDate, 'item_yes' => $item_yes, 'item_no' => $item_no]);
    }
}