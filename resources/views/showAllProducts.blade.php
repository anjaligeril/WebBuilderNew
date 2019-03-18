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

               <div class="col-lg-3">
                   <div class="nav-side-menu">
                       <?php
                       if(!isset($_SESSION)) {
                           session_start();
                       }
                       ?>
                       <div class="brand">{{$_SESSION["store_name"]}}</div>
                       <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                       <div class="menu-list">

                           <ul id="menu-content" class="menu-content collapse out">
                               <li  >
                                   <a href="/dashBoard"><i class="fa fa-home fa-lg"></i> User Home </a>
                               </li>
                               <li  >
                                   <a href="/home/{{$site_id}}"><i class="fa fa-certificate fa-lg"></i> Site DashBoard </a>
                               </li>
                               <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                                   <a href="#"><i class="fa fa-gift fa-lg"></i> Products <span class="arrow"></span></a>
                               </li>
                               <ul class="sub-menu collapse" id="products">
                                   <li class=""> <a href="/home/addProducts/{{$site_id}}">Add Products</a></li>
                                   <li><a href="/home/showAllProducts/{{$site_id}}">View Products</a></li>

                               </ul>


                               <li data-toggle="collapse" data-target="#customers" class="collapsed">
                                   <a href="#"><i class="fa fa-asterisk fa-lg"></i> Customers <span class="arrow"></span></a>
                               </li>
                               <ul class="sub-menu collapse" id="customers">
                                   <li><a href="/home/addCustomers/{{$site_id}}">Add Customer </a></li>
                                   <li><a href="/home/showAllCustomers/{{$site_id}}">View Customers</a></li>

                               </ul>





                               <li>
                                   <a href="/home/showCategories/{{$site_id}}"><i class="fa fa-book fa-lg"></i> Category</a>
                               </li>

                               <li>
                                   <a href="/home/showAllOrders/{{$site_id}}"><i class="fa fa-bell fa-lg"></i> Orders</a>
                               </li>
                               <li>
                                   <a href="/home/customizeTheme/{{$site_id}}"><i class="	fa fa-camera fa-lg"></i>  Customize Theme</a>
                               </li>
                               <li> <a href="/home/basicTheme/{{$site_id}}"><i class="	fa fa-caret-square-o-right fa-lg"></i> Visit Your Site</a></li>
                           </ul>
                       </div>
                   </div>
            </div>
<div class="col-lg-9">


                        <h5 class="searchHead">Search Product</h5>
                        <form method="GET" action="/home/searchProductName1/{{$site_id}}">


                            <input type="text" class="col-6" id="productName"  name="productName" placeholder="Search">


                            <button type="submit" class="btn btn-default"  >search</button>
                        </form>



                        <div class="card">
                            <div class="card-header">All Products</div>
                            <div class="card-body">
<div class="table-responsive">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>product Id</th>

                            <th>product Image</th>
                            <th>product Name</th>
                           <th>product Description</th>
                           <th>price </th>

                            <th>quantity </th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>

                            @if(isset($_GET['productName']))

                            <tbody>

                            @foreach($products as $singleProduct)
                                <tr>
                                    <td>{{$singleProduct->id}}</td>

                                    <td><img src="{{$singleProduct->image_path}}" height="100px" width="100px"></td>
                                    <td>{{$singleProduct->product_name}}</td>
                                    <td>{{$singleProduct->product_description}}</td>
                                    <td>{{$singleProduct->price}}</td>

                                    <td>{{$singleProduct->quantity}}</td>
                                    <td><a class="btn btn-danger "  href="">Delete</a></td>
                                    <td><a class="btn btn-success" href="/home/updateProductInfo/{{$singleProduct->id}}/{{$site_id}}">Update</a></td>
                                </tr>
                            @endforeach

                        @else
                        @foreach($products as $singleProduct)
                            <tr>
                                <td>{{$singleProduct->id}}</td>

                                <td><img src="{{$singleProduct->image_path}}" height="50px" width="50px"></td>
                                <td>{{$singleProduct->product_name}}</td>
                                <td>{{$singleProduct->product_description}}</td>
                                <td>{{$singleProduct->price}}</td>

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
    </div>
    </div>

@endsection
