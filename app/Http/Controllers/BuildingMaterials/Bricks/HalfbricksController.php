<?php

namespace App\Http\Controllers\BuildingMaterials\Bricks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalfbricksController extends Controller
{
    public function index()
    {
        return view('Pages.BuildingMaterials.Bricks.half');
    }
}
