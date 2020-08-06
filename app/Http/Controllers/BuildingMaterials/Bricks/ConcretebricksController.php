<?php

namespace App\Http\Controllers\BuildingMaterials\Bricks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConcretebricksController extends Controller
{
    public function index()
    {
        return view('Pages.BuildingMaterials.Bricks.concrete');
    }
}
