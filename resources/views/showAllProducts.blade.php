@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row ">

                <div class="card">
                    <div class="card-header">All Products</div>
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
                                <td><a class="btn btn-danger" href="/deleteProduct/{{$singleProduct->id}}">Delete</a></td>
                                <td><a class="btn btn-success" href="/updateProductInfo/{{$singleProduct->id}}">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
@endsection
