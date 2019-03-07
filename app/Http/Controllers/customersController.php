<?php

namespace App\Http\Controllers;

use App\Customer;
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
        return back()->with('success', 'Customer details added successfully');
    }

    public function showCustomers($site_id){
        $allCustomers=Customer::where('site_id',$site_id)->get();

        return view( 'showAllCustomers')->with (['customers'=>$allCustomers, 'site_id'=>$site_id]);
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

        $customertEmail=$_GET['email'];
        $selectedCustomer=Customer::where('email',$customertEmail)->get();
        //return $selectedProduct;
        return view( 'showAllCustomers')->with (['customers'=>$selectedCustomer, 'site_id'=>$site_id]);
    }

}
