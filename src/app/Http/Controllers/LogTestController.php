<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogTestController extends Controller
{
    public function index()
    {

        \Log::debug('ログ出力テスト');
        return 'log test';
    }
}
