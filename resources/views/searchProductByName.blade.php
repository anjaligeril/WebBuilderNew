@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Product</div>
                    <form method="GET" action="/home/searchProductName1/{$id}">


                            <input type="text" class="col-6" id="productName"  name="productName" placeholder="enter the product name">


                        <button type="submit" class="btn btn-primary"  >search</button>
                    </form>

                </div>
                <div class="row ">

                    @if(isset($_GET['productName']))

                    <div class="col-lg-9">
                        <h4 class="">Product</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>product_id</th>
                                <th>site_id</th>
                                <th>product_name</th>
                                <th>product_description</th>
                                <th>price </th>
                                <th>barcode</th>
                                <th>quantity </th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $singleProduct)
                                <tr>
                                    <td>{{$singleProduct->id}}</td>
                                    <td>{{$singleProduct->site_id}}</td>
                                    <td>{{$singleProduct->product_name}}</td>
                                    <td>{{$singleProduct->product_description}}</td>
                                    <td>{{$singleProduct->price}}</td>
                                    <td>{{$singleProduct->barcode}}</td>
                                    <td>{{$singleProduct->quantity}}</td>
                                    <td><a class="btn btn-danger" href="/home/deleteProduct/{{$singleProduct->id}}">Delete</a></td>
                                    <td><a class="btn btn-success" href="/home/updateProductInfo/{{$singleProduct->id}}">Update</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection