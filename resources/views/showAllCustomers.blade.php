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

                    <h5 class="">Search Customer</h5>
                    <form method="GET" action="/home/searchCustomerName1/{{$site_id}}">


                        <input type="text" class="col-6" id="custoPro"  name="custoPro" placeholder="enter the details customer " value="{{$property}}">


                        <button type="submit" class="btn btn-default"  >search</button>
                    </form>


              <div class="card">
                <div class="card-header">All Customers</div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>customer_id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>email</th>
                        <th>phone_no</th>
                        <th>address</th>
                        <th>apt</th>
                        <th>city</th>
                        <th>postal_code</th>
                        <th>country</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    </thead>
                    @if(isset($_GET['custoPro']))
                        <tbody>
                        @foreach($customers as $singleCustomer)
                            <tr>
                                <td>{{$singleCustomer->id}}</td>
                                <td>{{$singleCustomer->first_name}}</td>
                                <td>{{$singleCustomer->last_name}}</td>
                                <td>{{$singleCustomer->email}}</td>
                                <td>{{$singleCustomer->phone_no}}</td>
                                <td>{{$singleCustomer->address}}</td>
                                <td>{{$singleCustomer->apt}}</td>
                                <td>{{$singleCustomer->city}}</td>
                                <td>{{$singleCustomer->postal_code}}</td>
                                <td>{{$singleCustomer->country}}</td>
                                <td><a class="btn btn-danger" href="/home/deleteCustomer/{{$singleCustomer->id}}">Delete</a></td>
                                <td><a class="btn btn-success" href="/home/updateCustomerInfo/{{$singleCustomer->id}}/{{$site_id}}">Update</a></td>
                            </tr>
                        @endforeach

                        </tbody>

                    @else
                        <tbody>
                        @foreach($customers as $singleCustomer)
                            <tr>
                                <td>{{$singleCustomer->id}}</td>
                                <td>{{$singleCustomer->first_name}}</td>
                                <td>{{$singleCustomer->last_name}}</td>
                                <td>{{$singleCustomer->email}}</td>
                                <td>{{$singleCustomer->phone_no}}</td>
                                <td>{{$singleCustomer->address}}</td>
                                <td>{{$singleCustomer->apt}}</td>
                                <td>{{$singleCustomer->city}}</td>
                                <td>{{$singleCustomer->postal_code}}</td>
                                <td>{{$singleCustomer->country}}</td>
                                <td><a class="btn btn-danger" href="/home/deleteCustomer/{{$singleCustomer->id}}">Delete</a></td>
                                <td><a class="btn btn-success" href="/home/updateCustomerInfo/{{$site_id}}/{{$singleCustomer->id}}">Update</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                        {{ $customers->links() }}
                    @endif
                </table>
                </div>
            </div>
              </div>
            </div>
        </div>
    </div>

    @endsection
