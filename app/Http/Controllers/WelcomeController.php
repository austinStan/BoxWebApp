<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function index()
    {
       $data = [
           'fname'=>'Amitav',
           'lname'=>'roy',
       ];

       return Inertia::render('Welcome',$data);
    }
}
