<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Theme;
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

           if (!isset($_SESSION['cart_id'])) {

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
            $totalPrice=0;
           foreach($currentCart as $singleCartItem) {
               $totalPrice=$totalPrice+$singleCartItem->price;
           }

           $currentTheme=Theme::where('site_id',$site_id)->first();


           return view('cart')->with(['site_id'=>$site_id,'carts'=>$currentCart,'success'=>false,'theme1'=>$currentTheme,'price'=>$totalPrice]);

       }else{
        return Redirect::to('/customerLogin/'.$site_id);
       }
   }

   public function deleteProductFromCart($site_id,$id){
       session_start();
       Cart::destroy($id);
       $currentCart=Cart::where('cart_id',$_SESSION['cart_id'])->get();
       $currentTheme=Theme::where('site_id',$site_id)->first();
       $totalPrice=0;
       foreach($currentCart as $singleCartItem) {
           $totalPrice=$totalPrice+$singleCartItem->price;
       }
       return view('cart')->with(['site_id'=>$site_id,'carts'=>$currentCart,'success'=>true,'theme1'=>$currentTheme,'price'=>$totalPrice]);
      // $currentTheme=Theme::where('site_id',$site_id)->first();
      // $currentProduct=Product::where('site_id',$site_id)->get();
      // return view('basicTheme')->with(['theme1'=>$currentTheme,'site_id'=>$site_id,'products'=>$currentProduct]);
   }

   public function showCart($site_id){
       session_start();
       $currentCart=Cart::where('cart_id',$_SESSION['cart_id'])->get();
       $currentTheme=Theme::where('site_id',$site_id)->first();
       $totalPrice=0;
       foreach($currentCart as $singleCartItem) {
           $totalPrice=$totalPrice+$singleCartItem->price;
       }
       return view('cart')->with(['site_id'=>$site_id,'carts'=>$currentCart,'success'=>false,'theme1'=>$currentTheme,'price'=>$totalPrice]);
   }
}
