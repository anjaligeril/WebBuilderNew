<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function insertProduct(){
        $productName=$_GET['productName'];
        $productDescri=$_GET['productDescri'];
        $price=$_GET['price'];
        $compareAtPrice=$_GET['compareAtPrice'];
        $costPerItem=$_GET['costPerItem'];

        $barcode=$_GET['barcode'];
        $inventoryPolicy=$_GET['inventoryPolicy'];
        $quantity=$_GET['quantity'];


        $weight=$_GET['weight'];
        $country=$_GET['country'];
        $hsCode=$_GET['hsCode'];
        $fulfilmentService=$_GET['fulfilmentService'];

        $pageTitle=$_GET['pageTitle'];
        $metaDescription=$_GET['metaDescription'];
        $urlhandle=$_GET['url&handle'];



        $product=new Product();

        $product->site_id=1;
        $product->product_name=$productName;
        $product->product_description=$productDescri;
        $product->product_image="nskdie";
        $product->price=$price;
        $product->compare_at_price=$compareAtPrice;
        $product->cost_per_item=$costPerItem;
        $product->charge_tax=1;
        $product->stock_keeping_unit=1;
        $product->barcode=$barcode;
        $product->inventory_policy=$inventoryPolicy;
        $product->quantity=$quantity;
        $product->out_of_stock=1;
        $product->physical_product=1;
        $product->weight=$weight;
        $product->country_of_origin=$country;
        $product->fulfilment_service=$fulfilmentService;
        $product->hs_code=$hsCode;
        $product->seo_listing=1;
        $product->page_title=$pageTitle;
        $product->meta_description=$metaDescription;
        $product->	urlhandle=$urlhandle;
        $product->save();
        return back()->with('success', 'Product added successfully');
    }

    public function showProducts(){
        $allProducts=Product::all();
        return view( 'showAllProducts')->with ('products',$allProducts);
    }

    public function deleteProduct($product_id){
        Product::destroy($product_id);
        return back()->with('success', 'Product deleted successfully');
    }

    public function updateProductsBefore($product_id){
        $selectedProduct=Product::find($product_id);
        return view('updateProductInfo')->with('updateProduct',$selectedProduct);
    }
    public function updateProductsAfter($product_id){
        $productName=$_GET['productName'];
        //$productDescri=$_GET['productDescri'];
        $price=$_GET['price'];
        $compareAtPrice=$_GET['compareAtPrice'];
        $costPerItem=$_GET['costPerItem'];

        $barcode=$_GET['barcode'];
        $inventoryPolicy=$_GET['inventoryPolicy'];
        $quantity=$_GET['quantity'];


        $weight=$_GET['weight'];
        $country=$_GET['country'];
        $hsCode=$_GET['hsCode'];
        $fulfilmentService=$_GET['fulfilmentService'];

        $pageTitle=$_GET['pageTitle'];
        $metaDescription=$_GET['metaDescription'];
        $urlhandle=$_GET['url&handle'];

        $product=Product::find($product_id);

        $product->site_id=1;
        $product->product_name=$productName;
        //$product->product_description=$productDescri;
        $product->product_image="nskdie";
        $product->price=$price;
        $product->compare_at_price=$compareAtPrice;
        $product->cost_per_item=$costPerItem;
        $product->charge_tax=1;
        $product->stock_keeping_unit=1;
        $product->barcode=$barcode;
        $product->inventory_policy=$inventoryPolicy;
        $product->quantity=$quantity;
        $product->out_of_stock=1;
        $product->physical_product=1;
        $product->weight=$weight;
        $product->country_of_origin=$country;
        $product->fulfilment_service=$fulfilmentService;
        $product->hs_code=$hsCode;
        $product->seo_listing=1;
        $product->page_title=$pageTitle;
        $product->meta_description=$metaDescription;
        $product->	urlhandle=$urlhandle;
        $product->save();
        return back()->with('success', 'Product updated successfully');
    }
}
