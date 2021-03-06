<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = 'all products';

        $categories=Category::whereNull('parent_id')->get();

        if ($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);
            $products = $category->products()->paginate(6);
            
        } else {
            $products = Product::inRandomOrder()->paginate(6);
        }
        return view('Pages.Products.index', compact('products', 'categoryName','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {  
     
        $categories=Category::whereNull('parent_id')->get();
        $single_product=Product::where('slug',$slug)->firstorFail();
        $hot_offer=Product::where('types','hot offer')->inRandomOrder()->take(2)->get();
        $category = $single_product->category()->whereNull('parent_id')->get();
      
        foreach($category as $c){
            $b = Category::find($c->id);
            $cate_products = $b->products()->get();
        }
        return view('Pages.Products.single-product',compact('single_product','categories','hot_offer','cate_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
