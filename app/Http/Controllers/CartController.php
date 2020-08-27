<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CartController extends Controller
{
    public function add(Product $product){

        dd(int($product->price));

        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
               'image' => $product->image
            ),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index')->with('success','Item was successfully added to your Cart!');
    }
    public function index(){
        $categories=Category::whereNull('parent_id')->get();

        $cart_items = \Cart::session(auth()->id())->getContent();
        // dd($cart_items);
        return view('Pages.Products.cart',compact('categories','cart_items'));

    }
}
