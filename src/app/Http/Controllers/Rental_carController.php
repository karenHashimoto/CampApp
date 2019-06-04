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
        
        
       
        if ($request->has('item_yes')) {
            $isItemRental = '1';
        } else {
            $isItemRental = '0';
        }

        $request->session()->put('isItemRental', $isItemRental);


        //  $camps = $request->session()->get('camps');
        // $adlut_number = $request->session()->get('adlut_number');
        // $child_number  = $request->session()->get('child_number');
        // dd($camps,$adlut_number,$child_number);

        //以下session確認
        // $camps = $request->session()->get('camps');
        // $adlut_number = $request->session()->get('adlut_number');
        // $child_number  = $request->session()->get('child_number');
        // $inDate = $request->session()->get('inDate');
        // $outDate  = $request->session()->get('outDate');
        // // dd($camps,$adlut_number,$child_number,$inDate,$outDate);




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
