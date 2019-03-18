@extends('layouts.app')

@section('content')

<div class="container">
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
                    <a href="/home/{{$id}}"><i class="fa fa-certificate fa-lg"></i> Site DashBoard </a>
                </li>
                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                    <i class="fa fa-gift fa-lg"></i> Products <span class="arrow"></span>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class=""> <a href="addProducts/{{$id}}">Add Products</a></li>
                    <li><a href="showAllProducts/{{$id}}">View Products</a></li>

                </ul>


                <li data-toggle="collapse" data-target="#customers" class="collapsed">
                    <a href="#"><i class="fa fa-asterisk fa-lg"></i> Customers <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="customers">
                    <li><a href="addCustomers/{{$id}}">Add Customer</a></li>
                    <li><a href="showAllCustomers/{{$id}}">View Customers</a></li>

                </ul>





                <li>
                    <a href="showCategories/{{$id}}"><i class="fa fa-book fa-lg"></i> Category</a>
                </li>

                <li>
                    <a href="showAllOrders/{{$id}}"><i class="fa fa-bell fa-lg"></i> Orders</a>
                </li>
                <li>
                    <a href="customizeTheme/{{$id}}"><i class="	fa fa-camera fa-lg"></i>  Customize Theme</a>
                </li>
                <li> <a href="basicTheme/{{$id}}"><i class="	fa fa-caret-square-o-right fa-lg"></i> Visit Your Site</a></li>
            </ul>
        </div>
    </div>
    </div>
    <div class="col-lg-9 col-md-9">

    </div>
</div>
@endsection
