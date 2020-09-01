<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Coupon;

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
               'image' => $product->image,
               'slug'=>$product->slug
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
        return back();
    }

    public function applyCoupon(){
            // add single condition on a cart bases
    $couponCode=request('coupon_code');

    $couponData=Coupon::where('code',$couponCode)->first();

    if(!$couponData){
        
        return back()->with('error','Coupon doesn\'t exist');
    }
    $condition = new \Darryldecode\Cart\CartCondition(array(
        'name' => $couponData->name,
        'type' => $couponData->type,
        'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
        'value' => $couponData->value,
    ));

    \Cart::session(auth()->id())->condition($condition); 
    return back()->with('success','Coupon was added!');
    }

    public function Tax(){
        
    }

}
