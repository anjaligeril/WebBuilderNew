<?php

namespace App\Http\Controllers;

use App\Category;
use App\Media_product;
use App\Product;
use App\Site;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function insertProduct( Request $request,$site_id){
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

        $costPerItem=$_POST['costPerItem'];

        $barcode=$_POST['barcode'];

        $quantity=$_POST['quantity'];


        $weight=$_POST['weight'];
        $country=$_POST['country'];




        $product=new Product();

        $product->site_id=$site_id;
        $product->product_name=$productName;
        $product->product_description=$productDescri;

        $product->price=$price;

        $product->cost_per_item=$costPerItem;
        $product->charge_tax=1;
        $product->stock_keeping_unit=1;
        $product->barcode=$barcode;

        $product->quantity=$quantity;
        $product->out_of_stock=1;
        $product->physical_product=1;
        $product->weight=$weight;
        $product->country_of_origin=$country;



        $product->save();
        return back()->with('success', 'Product added successfully');
    }

    public function showProducts($site_id){
        $allProducts=Product::where('site_id',$site_id)->Paginate(2);

         $allProducts;
        return view( 'showAllProducts')->with (['products'=>$allProducts,'site_id'=>$site_id]);
    }

    public function deleteProduct($product_id){
        Product::destroy($product_id);
        return back()->with('success', 'Product deleted successfully');
    }

    public function updateProductsBefore($product_id,$site_id){
        $selectedProduct=Product::find($product_id);
        $allCategory=Category::where('site_id',$site_id)->get();
        //return $allCategory;
        return view('updateProductInfo')->with(['updateProduct'=>$selectedProduct,'site_id'=>$site_id,'category'=>$allCategory]);
    }
    public function updateProductsAfter($product_id,$site_id){
        $productName=$_GET['productName'];
        //$productDescri=$_GET['productDescri'];
        $price=$_GET['price'];

        $costPerItem=$_GET['costPerItem'];

        $barcode=$_GET['barcode'];

        $quantity=$_GET['quantity'];


        $weight=$_GET['weight'];
        $country=$_GET['country'];


        $product=Product::find($product_id);

        $product->site_id=$site_id;
        $product->product_name=$productName;
        //$product->product_description=$productDescri;

        $product->price=$price;

        $product->cost_per_item=$costPerItem;
        $product->charge_tax=1;
        $product->stock_keeping_unit=1;
        $product->barcode=$barcode;

        $product->quantity=$quantity;
        $product->out_of_stock=1;
        $product->physical_product=1;
        $product->weight=$weight;
        $product->country_of_origin=$country;

        $product->save();
        return back()->with('success', 'Product updated successfully');
    }

    public function searchProductByName($id){

        $productName=$_GET['productName'];

        $selectedProducts=Product::where('site_id',$id)->where('product_name',$productName)->get();

       //return $selectedProducts;
        return view('showAllProducts')->with (['products'=>$selectedProducts,'site_id'=>$id]);
    }

    public function getProductCategory($site_id){
        $allCategory=Category::where('site_id',$site_id)->get();
       // return $allCategory;
        return view('addProducts')->with(['category'=>$allCategory,'site_id'=>$site_id]);
    }
}
