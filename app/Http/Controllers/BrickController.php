<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrickController extends Controller
{
        public function index(){
            return view('Pages.bricks');
        }
    
}
