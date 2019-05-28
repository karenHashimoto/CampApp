<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Customer;

class CustomersController extends Controller
{
//   public function __construct()
//   {
//     $this->middleware('auth');
//   }
  
  public function input() {
    return view('customer.input');
  }
  
  public function confirm(Request $request) {
    //入力値の取得
    $customer = new Customer($request->all());
    
    //入力チェック
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
    ]);
    
    //セッションに保存
    $request->session()->put('customer', $customer);
    
    //ビューの表示
    return view('customer.confirm', compact('customer'));
  }
  
  public function update(Request $request) {
    //セッションから取得
    $customer = $request->session()->get('customer');
    
    //DBの更新
    $customer->save();
    
    //ビューの表示
    return redirect('customer/complete');
  }
  
  public function complete(Request $request) {
    return view('customer.complete');
  }
}