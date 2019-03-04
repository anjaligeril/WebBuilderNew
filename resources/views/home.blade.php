@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

            <div class="card col-lg-5">
                <div class="card-header">Dashboard</div>
                    <a href="addProducts">Add products</a>
                    <a href="showAllProducts">Show all products</a>
                    <a href="searchProductName">Find Product by name </a>
                    <a href="upload_productImages">Upload product images </a>
                <br/>
                    <a href="addCustomers">Customer Registration</a>
                    <a href="showAllCustomers">Show All Customers</a>
                    <a href="searchCustomerEmail">Find Customer by email</a>
                <br/>
                <a href="addCategory">Add Category</a>


            </div>
        </div>
    </div>
</div>
@endsection
