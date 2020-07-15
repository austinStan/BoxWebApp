<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandController extends Controller
{
        public function getMasaka(){
            return view('Pages.Land.masaka');
        }
    
}
