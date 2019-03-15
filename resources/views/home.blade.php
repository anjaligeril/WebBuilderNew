@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">

            <div class="card col-lg-5">
                <div class="card-header">Dashboard</div>
                    <a href="addProducts/{{$id}}">Add products</a>
                    <a href="showAllProducts/{{$id}}">Show all products</a>


                <br/>

                    <a href="addCustomers/{{$id}}">Customer Registration</a>
                    <a href="showAllCustomers/{{$id}}">Show All Customers</a>

                <br/>

                <a href="showCategories/{{$id}}">show Category</a>
<br/>
                <a href="showAllOrders/{{$id}}">show Orders</a>
                <br/>
                <a href="customizeTheme/{{$id}}">Customize Theme</a>
                <a href="basicTheme/{{$id}}">Visit Your Site</a>
            </div>
        </div>
    </div>
</div>
@endsection
