<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Camp;
use App\Title;
use App\Point;
use App\Point_Master;
use App\Facility;
use App\Facility_Master;
use App\Cg_Picture;
use App\Cg_Picture_Master;

class DetailController extends Controller
{
    public function index($id)
        {
    
            $camps = Camp::find($id);

           


            $titles = Title::find($id);
            
           

        return view('detail', ['camps' => $camps, 'titles' => $titles]);
          
    }
}
