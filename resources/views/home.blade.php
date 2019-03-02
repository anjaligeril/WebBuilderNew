@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">

            <div class="card col-lg-5">
                <div class="card-header">Dashboard</div>
                    <a href="addProducts">Add products</a>
                    <a href="showAllProducts">Show products</a>
                    <a href="upload_productImages">Upload product images </a>
                    <a href="addCustomers">Customer Registration</a>
                    <a href="showAllCustomers">Show All Customers</a>
            </div>
        </div>
    </div>
</div>
@endsection
