<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CartController extends Controller
{
    public function add(Product $product){

        $num =$product->price;
        $value = floatval(preg_replace('/[^\d\.]+/', '', $num));
        

        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $value,
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
    public function destroy($itemId){

         \Cart::session(auth()->id())->remove($itemId);
        // dd($cart_items);
        return redirect()->route('cart.index')->with('error','Item was successfully deleted from your Cart!');
    }

    public function update($rowId){
        \Cart::session(auth()->id())->update($rowId,[
            'quantity' =>array(
                'relative' => false,
                'value' => request('quantity')
            ),
        ]);
        return redirect()->route('cart.index')->with('success','item quantity was successfully updated!');
    }
}
