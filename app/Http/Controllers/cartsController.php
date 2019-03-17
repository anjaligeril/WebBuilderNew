<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class cartsController extends Controller
{
   public function addToCart($site_id,$product_id)
   {
       session_start();
       //session_destroy();
       $currentProduct=Product::find($product_id);
       if (isset($_SESSION['customer_id'])) {

           if (isset($_SESSION['cart_id'])) {

           } else {
               $cartId = str_random(5);
               $_SESSION["cart_id"] = $cartId;
           }


           //echo 'welcome ' . $_SESSION['cart_id'];

           $cart = new Cart();
           $cart->site_id = $site_id;
           $cart->product_id = $product_id;
           $cart->customer_id = $_SESSION["customer_id"];
           $cart->quantity = 1;
           $cart->price = $currentProduct->price;
           $cart->cart_id = $_SESSION['cart_id'];
           $cart->save();
           //return $currentProduct;

            $currentCart=Cart::where('cart_id',$_SESSION['cart_id'])->get();

           return view('cart')->with(['site_id'=>$site_id,'carts'=>$currentCart]);

       }else{
        return Redirect::to('/customerLogin/'.$site_id);
       }
   }
}
