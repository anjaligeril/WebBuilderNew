@extends('layouts.app')

@section('content')
<script>
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }
</script>
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
            <div class="row justify-content-center">
<div class="col-lg-6">
                    <div class="card">
<div class="col-lg-10">
                        <div class="card-header">Search Product</div>
                        <form method="GET" action="/home/searchProductName1/{{$site_id}}">


                            <input type="text" class="col-6" id="productName"  name="productName" placeholder="enter the product name">


                            <button type="submit" class="btn btn-default"  >search</button>
                        </form>
</div>



                </div>
</div>
                <div class="card">
                    <div class="card-header">All Products</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>product_id</th>
                            <th>site_id</th>
                            <th>product Image</th>
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
                        @if(isset($_GET['productName']))

                            @foreach($products as $singleProduct)
                                <tr>
                                    <td>{{$singleProduct->id}}</td>
                                    <td>{{$singleProduct->site_id}}</td>
                                    <td><img src="{{$singleProduct->image_path}}" height="100px" width="100px"></td>
                                    <td>{{$singleProduct->product_name}}</td>
                                    <td>{{$singleProduct->product_description}}</td>
                                    <td>{{$singleProduct->price}}</td>
                                    <td>{{$singleProduct->barcode}}</td>
                                    <td>{{$singleProduct->quantity}}</td>
                                    <td><a class="btn btn-danger "  href="">Delete</a></td>
                                    <td><a class="btn btn-success" href="/home/updateProductInfo/{{$singleProduct->id}}/{{$site_id}}">Update</a></td>
                                </tr>
                            @endforeach
                            <div class="justify-content-center">{{ $products->links() }}</div>
                        @else
                        @foreach($products as $singleProduct)
                            <tr>
                                <td>{{$singleProduct->id}}</td>
                                <td>{{$singleProduct->site_id}}</td>
                                <td><img src="{{$singleProduct->image_path}}" height="50px" width="50px"></td>
                                <td>{{$singleProduct->product_name}}</td>
                                <td>{{$singleProduct->product_description}}</td>
                                <td>{{$singleProduct->price}}</td>
                                <td>{{$singleProduct->barcode}}</td>
                                <td>{{$singleProduct->quantity}}</td>
                                <td><a class="btn btn-danger confirm"   href="/home/deleteProduct/{{$singleProduct->id}}">Delete</a></td>
                                <td><a class="btn btn-success" href="/home/updateProductInfo/{{$singleProduct->id}}/{{$site_id}}">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{ $products->links() }}
                            @endif
                    </table>

                </div>

        </div>
    </div>
    </div>


@endsection
