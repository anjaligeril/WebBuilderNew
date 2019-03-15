<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use App\Theme;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function insertCustomer($site_id){
        $firstName=$_GET['firstName'];
        $lastName=$_GET['lastName'];
        $email=$_GET['email'];
        $password=$_GET['password'];
        $phoneNumber=$_GET['phoneNumber'];

        $address=$_GET['address'];
        $apt=$_GET['apt'];
        $city=$_GET['city'];


        $postalCode=$_GET['postalCode'];
        $country=$_GET['country'];




        $customer=new Customer();
        $customer->site_id=$site_id;
        $customer->first_name=$firstName;
        $customer->last_name=$lastName;
        $customer->email=$email;
        $customer->password=$password;
        $customer->phone_no=$phoneNumber;
        $customer->address=$address;
        $customer->apt=$apt;
        $customer->city=$city;
        $customer->postal_code=$postalCode;
        $customer->country=$country;

        $customer->save();
        $currentCustomer=Customer::where('email',$email)->first();
        session_start();
        $_SESSION["customer_id"] = $currentCustomer->id;
        $currentTheme=Theme::where('site_id',$site_id)->first();
        $currentProduct=Product::where('site_id',$site_id)->get();
        //return $_SESSION["customer_id"];
        return redirect('/basicTheme/'.$site_id)->with(['theme1'=>$currentTheme,'site_id'=>$site_id,'products'=>$currentProduct]);
    }

    public function showCustomers($site_id){
        $allCustomers=Customer::where('site_id',$site_id)->paginate(5);
  $property='';
        return view( 'showAllCustomers')->with (['customers'=>$allCustomers, 'site_id'=>$site_id,'property'=>$property]);
    }

    public function deleteCustomer($customer_id){
        Customer::destroy($customer_id);
        return back()->with('success', 'Customer deleted successfully');
    }
    public function updateCustomersBefore($Customer_id,$site_id){
        $selectedCustomer=Customer::find($Customer_id);
        return view('updateCustomerInfo')->with(['updateCustomer'=>$selectedCustomer,'site_id'=>$site_id]);
    }

    public function updateCustomersAfter($Customer_id,$site_id){
        $firstName=$_GET['firstName'];
        $lastName=$_GET['lastName'];
        $email=$_GET['email'];

        $phoneNumber=$_GET['phoneNumber'];

        $address=$_GET['address'];
        $apt=$_GET['apt'];
        $city=$_GET['city'];


        $postalCode=$_GET['postalCode'];
        $country=$_GET['country'];




        $selectedcustomer=Customer::find($Customer_id);
        $selectedcustomer->site_id=$site_id;
        $selectedcustomer->first_name=$firstName;
        $selectedcustomer->last_name=$lastName;
        $selectedcustomer->email=$email;

        $selectedcustomer->phone_no=$phoneNumber;
        $selectedcustomer->address=$address;
        $selectedcustomer->apt=$apt;
        $selectedcustomer->city=$city;
        $selectedcustomer->postal_code=$postalCode;
        $selectedcustomer->country=$country;

        $selectedcustomer->save();
        return back()->with('success', 'Customer updated successfully');
    }

    public function searchCustomerByEmail($site_id){

        $customerPro=$_GET['custoPro'];
        $selectedCustomer=Customer::where('email','like','%'.$customerPro.'%')->orwhere('first_name', 'like','%'.$customerPro.'%')->orwhere('last_name', 'like','%'.$customerPro.'%')->orwhere('phone_no', 'like','%'.$customerPro.'%')->orwhere('address', 'like','%'.$customerPro.'%')->orwhere('apt', 'like','%'.$customerPro.'%')->orwhere('city', 'like','%'.$customerPro.'%')->orwhere('postal_code', 'like','%'.$customerPro.'%')->orwhere('country', 'like','%'.$customerPro.'%')->Paginate(5);
        //return $selectedProduct;
        return view( 'showAllCustomers')->with (['customers'=>$selectedCustomer, 'site_id'=>$site_id,'property'=>$customerPro]);
    }

    public function login($site_id){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $currentCustomer=Customer::where('email',$email)->first();
        $currentTheme=Theme::where('site_id',$site_id)->first();
        if($currentCustomer->email==$email && $currentCustomer->password==$password){
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["customer_id"]=$currentCustomer->id;
            $currentProduct=Product::where('site_id',$site_id)->get();
            return view('basicTheme')->with(['theme1'=>$currentTheme,'site_id'=>$site_id,'products'=>$currentProduct]);

           // return view('basicTheme')->with(['theme1'=>$currentTheme,'site_id'=>$site_id]);
        }else{
            return back()->with('error', 'Incorrect password or email');
        }


    }

    public function logout($site_id){
        session_start();
        session_unset();
        session_destroy();
        return redirect('basicTheme/'.$site_id);
    }


}
