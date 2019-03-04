<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function insertCustomer(){
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
        $customer->site_id=1;
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

    public function showCutomers(){
        $allCustomers=Customer::all();
        return view( 'showAllCustomers')->with ('customers',$allCustomers);
    }

    public function deleteCustomer($customer_id){
        Customer::destroy($customer_id);
        return back()->with('success', 'Customer deleted successfully');
    }
    public function updateCustomersBefore($Customer_id){
        $selectedCustomer=Customer::find($Customer_id);
        return view('updateCustomerInfo')->with('updateCustomer',$selectedCustomer);
    }

    public function updateCustomersAfter($Customer_id){
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
        $selectedcustomer->site_id=1;
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
        return redirect('showAllCustomers')->with('success', 'Customer updated successfully');
    }

}
