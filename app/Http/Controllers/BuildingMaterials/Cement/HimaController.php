<?php

namespace App\Http\Controllers\BuildingMaterials\Cement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HimaController extends Controller
{
    public function index()
    {
        return view('Pages.BuildingMaterials.Cement.hima');
    }
}
