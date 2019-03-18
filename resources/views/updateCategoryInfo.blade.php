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
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Update Category</div>
                    <form method="GET" action="/home/updateCategoryToTable/{{$updateCategory->id}}/{{$site_id}}">

                        <div class="form-group col-lg-8">
                            <label >Category Name</label>
                            <input type="text" class="form-control" id="category_name"  name="category_name" value="{{$updateCategory->category_name}}">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Category Description</label>
                            <textarea type="text" class="form-control" id="category_desc"  name="category_desc" rows="5"> {{$updateCategory->category_description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection