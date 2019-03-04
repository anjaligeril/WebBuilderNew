<?php

namespace App\Http\Controllers;

use App\Media_product;
use App\Product;
use App\Site;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function insertProduct( Request $request){
        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $path='';

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $images=new Media_product();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
                $path=public_path().'/images/'.$name;
                $images->path=$path;
                $images->product_id=1;
                $images->site_id=1;
                $images->save();
            }
        }

        $productName=$_POST['productName'];
        $productDescri=$_POST['productDescri'];
        $price=$_POST['price'];
        $compareAtPrice=$_POST['compareAtPrice'];
        $costPerItem=$_POST['costPerItem'];

        $barcode=$_POST['barcode'];
        $inventoryPolicy=$_POST['inventoryPolicy'];
        $quantity=$_POST['quantity'];


        $weight=$_POST['weight'];
        $country=$_POST['country'];
        $hsCode=$_POST['hsCode'];
        $fulfilmentService=$_POST['fulfilmentService'];

        $pageTitle=$_POST['pageTitle'];
        $metaDescription=$_POST['metaDescription'];
        $urlhandle=$_POST['url&handle'];



        $product=new Product();
        $currentSite=Site::with('user')->where(Auth::User()->id)->get();
        $product->site_id=$currentSite->id;
        $product->product_name=$productName;
        $product->product_description=$productDescri;

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

    public function searchProductByName(){
        $productName=$_GET['productName'];
        $selectedProduct=Product::where('product_name','$productName')->get();
        return view( 'searchProductByName')->with ('products',$selectedProduct);
    }
}
