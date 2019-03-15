<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Order_product;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function addToOrder($site_id){
        session_start();

        $full_name=$_GET['fullName'];
        $email=$_GET['email'];
        $address=$_GET['address'];
        $apt=$_GET['apt'];
        $city=$_GET['city'];
        $phoneNumber=$_GET['phoneNumber'];
        $postalCode=$_GET['postalCode'];
        $country=$_GET['country'];

        $currentOrder=new Order();
        $currentOrder->customer_id=$_SESSION["customer_id"];
        $currentOrder->site_id=$site_id;
        $currentOrder->shipping_name=$full_name;
        $currentOrder->shipping_email=$email;
        $currentOrder->shipping_phone=$phoneNumber;
        $currentOrder->shipping_address=$address;
        $currentOrder->shipping_apt=$apt;
        $currentOrder->shipping_city=$city;
        $currentOrder->shipping_postalcode=$postalCode;
        $currentOrder->shipping_country=$country;
        $currentOrder->save();
        $newOrder=Order::where('customer_id',$_SESSION["customer_id"])->where('site_id',$site_id)->first();
        $order_id=$newOrder->id;
        $currentCart=Cart::where('cart_id',$_SESSION['cart_id'])->get();

        //return $currentCart;
        foreach($currentCart as $singleCartItem){
            $currentOrderProduct=new Order_product();
            $currentOrderProduct->order_id=$order_id;
            $currentOrderProduct->product_id=$singleCartItem->product_id;
            $currentOrderProduct->quantity=$singleCartItem->quantity;
            $currentOrderProduct->site_id=$site_id;
            $currentOrderProduct->price=$singleCartItem->price;
            $currentOrderProduct->save();
        }
        Cart::where('cart_id',$_SESSION['cart_id'])->delete();
        return redirect('/thankyou/'.$site_id)->with('success', 'Order added successfully and products are on your way');
    }

    public function showOrders($site_id){
        $currentOrder=Order::where('site_id',$site_id)->get();
        $currentOrderProduct=Order_product::where('site_id',$site_id)->get();
        //return $currentOrder;
       // return $currentOrderProduct;
        return view('ViewOrders')->with(['orders'=>$currentOrder,'site_id'=>$site_id,'orderProduct'=>$currentOrderProduct]);

    }

    public function updateStatus($site_id,$order_id){
$status=$_GET['status'];
return $status;
;
    }
}
