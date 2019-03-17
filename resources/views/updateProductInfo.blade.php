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
            <div class="col-lg-3 col-md-3 ">
                <div class="nav-side-menu">
                    <div class="brand">Brand Logo</div>
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
                                <li><a href="/home/addCustomers/{{$site_id}}">Add Customer</a></li>
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
                <div class="card">
                    <div class="card-header">Update Product Info</div>
                    <div class="card-body">
                    <form method="POST" action="/home/updateProductToTable/{{$updateProduct->id}}/{{$site_id}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                        <div class="form-group col-lg-6">
                            <label >Product Name</label>
                            <input type="text" class="form-control" id="productName"  name="productName" value="{{$updateProduct->product_name}}">
                        </div>
                        <div class="form-group col-lg-12">
                            <label >Description:</label>
                            <textarea type="text" class="form-control" id="productDescri" rows="5"  name="productDescri " >{{$updateProduct->product_description}}</textarea>
                        </div>
                        <div>


                            <div class="input-group control-group increment" >
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">

                                </div>
                            </div>




                        </div>
                        <div class="form-group  col-lg-6 col-md-6">
                            <label >Price</label>
                            <input type="text" class="form-control" id="price"  name="price" value="{{$updateProduct->price}}">
                        </div>
                        <div class="col-lg-6">
                            <label for="sel1">Select category (select one):</label>
                            <select class="form-control" id="sel1" name="sel1">
                                @foreach($category as $singleCategory)
                                    <option>{{$singleCategory->category_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label >Cost Per Item</label>
                            <input type="text" class="form-control" id="costPerItem"  name="costPerItem" value="{{$updateProduct->cost_per_item}}">
                        </div>


                        <div class="form-group col-lg-6">
                            <label >Stock Keeping Unit</label>
                            <input type="text" class="form-control" id="stockKeepingUnit"  name="stockKeepingUnit" value="{{$updateProduct->stock_keeping_unit}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Barcode</label>
                            <input type="text" class="form-control" id="barcode"  name="barcode" value="{{$updateProduct->barcode}}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label >Quantity</label>
                            <input type="text" class="form-control" id="quantity"  name="quantity" value="{{$updateProduct->quantity}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Weight</label>
                            <input type="text" class="form-control" id="weight"  name="weight" value="{{$updateProduct->weight}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Country Of Origin</label>
                            <input type="text" class="form-control" id="country"  name="country" value="{{$updateProduct->country_of_origin}}">
                        </div>

                        <button type="submit" class="btn btn-success btn-lg text-center"  style="margin-left: 325px">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection