<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        $categories=Category::whereNull('parent_id')->get();

        $products = Product::inRandomOrder()->take(10)->get();  
        
        $latest_products=Product::latest()->take(10)->get();

        $best_deal=Product::where('types','best deal')->inRandomOrder()->take(2)->get();
        $top_seller=Product::where('types','top seller')->inRandomOrder()->take(2)->get();
        $top_rated=Product::where('types','top rated')->inRandomOrder()->take(2)->get();
        $hot_offer=Product::where('types','hot offer')->inRandomOrder()->take(2)->get();
        

        return view('Pages.home',compact('categories','products','latest_products','best_deal','top_seller','top_rated','hot_offer'));
    }
}
