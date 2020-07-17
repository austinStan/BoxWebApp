<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingMaterialsController extends Controller
{
    public function getSand(){
        return view('Pages.BuildingMaterials.sand');
    }
    public function getBricks(){
        return view('Pages.BuildingMaterials.bricks');
    }
}
