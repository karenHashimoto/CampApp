<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Customer;
use App\Person;
use App\Date;
use App\Rental_car;
use App\Rental_item;


class CustomersController extends Controller
{

  

  public function input() {
    $request->session()->put('isCarRental', $isCarRental);

    

    return view('customer.input');
  }
  









  public function confirm(Request $request) {
    //入力値の取得
    $customer = new Customer($request->all());
    
    
   
    
    
    //入力チェック
    // $this->validate($request, [
    //   'name' => 'required',
    //   'email' => 'required|email',
    //   'phone' => 'required',
    // ]);
    
    //セッションに保存
    $request->session()->put('customer', $customer);

    // sessionから取得
    // $customer = $request->session()->all();
    
    $customer = $request->session()->get('customer');
    $camps = $request->session()->get('camps');
    $adult_number = $request->session()->get('adult_number');
    $child_number  = $request->session()->get('child_number');
    $inDate = $request->session()->get('inDate');
    $outDate  = $request->session()->get('outDate');
    $isItemRental = $request->session()->get('isItemRental');
    $isCarRental  = $request->session()->get('isCarRental');


    


    
    //ビューの表示
    return view('customer.confirm', compact('customer'),[
      'camps' => $camps,
      'adult_number' => $adult_number,
      'child_number' => $child_number,
      'inDate' => $inDate,
      'outDate' => $outDate,
      'isItemRental' => $isItemRental,
      'isCarRental' => $isCarRental
  ]);
  }
  












  public function update(Request $request) {
    //セッションから取得
    $customer = $request->session()->get('customer');
    $camps = $request->session()->get('camps');
    $adult_number = $request->session()->get('adult_number');
    $child_number  = $request->session()->get('child_number');
    $inDate = $request->session()->get('inDate');
    $outDate  = $request->session()->get('outDate');
    $isItemRental = $request->session()->get('isItemRental');
    $isCarRental  = $request->session()->get('isCarRental');


    
    //DBの更新
    //以下$customerへの使いの仕方
    $customer->camp_name = $camps->camp_name;
    $customer->adult_number = $adult_number;
    $customer->child_number = $child_number;
    $customer->inDate = $inDate;
    $customer->outDate = $outDate;
    $customer->isItemRental = $isItemRental;
    $customer->isCarRental = $isCarRental;
    


    $customer->save();

    $request->session()->flush();

    //ビューの表示
    return redirect('customer/complete');
  }
  




  public function complete(Request $request) {
    return view('customer.complete');
  }
}