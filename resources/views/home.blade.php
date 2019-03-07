@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">

            <div class="card col-lg-5">
                <div class="card-header">Dashboard</div>
                    <a href="addProducts/{{$id}}">Add products</a>
                    <a href="showAllProducts/{{$id}}">Show all products</a>
                    <a href="searchProductName/{{$id}}">Find Product by name </a>

                <br/>

                    <a href="addCustomers/{{$id}}">Customer Registration</a>
                    <a href="showAllCustomers/{{$id}}">Show All Customers</a>
                    <a href="searchCustomerEmail">Find Customer by email</a>
                <br/>
                <a href="addCategories/{{$id}}">Add Category</a>
                <a href="showCategories/{{$id}}">show Category</a>
<br/>
                <a href="setTheme/{{$id}}">Customize Theme</a>
                <a href="basicTheme/{{$id}}">Visit Your Site</a>
            </div>
        </div>
    </div>
</div>
@endsection
