<?php

namespace App\Http\Controllers\BuildingMaterials\TilesFloors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FloorRunnerController extends Controller
{
    public function index()
    {
        return view('Pages.BuildingMaterials.TilesFloors.floor-runners');
    }
}
