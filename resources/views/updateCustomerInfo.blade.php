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
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Update Customer Info</div>
                    <form method="get" action="/home/updateToCustomerTable/{{$updateCustomer->id}}/{{$site_id}}">

                        <div class="form-group col-lg-6">
                            <label >First Name</label>
                            <input type="text" class="form-control" id="firstName"  name="firstName" value="{{$updateCustomer->first_name}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Last Name</label>
                            <input type="text" class="form-control" id="lastName"  name="lastName" value="{{$updateCustomer->last_name}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  name="email" value="{{$updateCustomer->email}}">
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label >Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber"  name="phoneNumber" value="{{$updateCustomer->phone_no}}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label >Address</label>
                            <input type="text" class="form-control" id="address"  name="address" value="{{$updateCustomer->address}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Apartment</label>
                            <input type="text" class="form-control" id="apt"  name="apt" value="{{$updateCustomer->apt}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >City</label>
                            <input type="text" class="form-control" id="city"  name="city" value="{{$updateCustomer->city}}">
                        </div>
                        <div class="form-group col-lg-6">
                            <label >Postal Code</label>
                            <input type="text" class="form-control" id="postalCode"  name="postalCode" value="{{$updateCustomer->postal_code}}">
                        </div>

                        <div class="form-group col-lg-6">
                            <label >Country</label>
                            <input type="text" class="form-control" id="country"  name="country" value="{{$updateCustomer->country}}">
                        </div>

                        <button type="submit" class="btn btn-primary"  >Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection