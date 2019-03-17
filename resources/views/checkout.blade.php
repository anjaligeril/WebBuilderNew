<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">


</head>

<body>

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
<!-- Navigation -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{$theme1->site_name}}</a>
        </div>

        <?php
        if(!isset($_SESSION)) {
            session_start();
        }
        ?>
        @if(isset($_SESSION['customer_id']))
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/home/basicTheme/cart/{{$site_id}}"><span class="glyphicon glyphicon-shopping-cart" style="font-size:30px"></span> </a></li>
                <li><a href="/home/basicTheme/logout/{{$site_id}}"><span class="glyphicon glyphicon-log-out" style="font-size:30px"></span> Logout</a></li>

            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/addCustomers/{{$site_id}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/customerLogin/{{$site_id}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        @endif
    </div>
</nav>

<!-- Page Content -->
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
    <div class="row justify-content-center">



        <div class="col-lg-5">
            <div class="card">
                <div class="card-header"><h4>Customer Details</h4></div>

                <h5>Name: {{$currentCustomer->first_name}} {{$currentCustomer->last_name}}</h5>
                <h5>Address: {{$currentCustomer->address}}, {{$currentCustomer->apt}},{{$currentCustomer->city}}, {{$currentCustomer->postal_code}}</h5>
                <h5>Email: {{$currentCustomer->email}} </h5>
                <h5>Phone Number: {{$currentCustomer->phone_no}}</h5>
                <a class="btn btn-success" href="/home/updateCustomerInfo/{{$currentCustomer->id}}/{{$site_id}}">Update</a>
            </div>
        </div>
        <div class="col-lg-7">

            <div class="card">
                <div class="card-header">Shipping Address</div>
                <form method="GET" action="/home/basicTheme/AddCheckOut/{{$site_id}}">

                    <div class="form-group col-lg-10">
                        <label >Full Name</label>
                        <input type="text" class="form-control" id="fullName"  name="fullName">
                    </div>
                    <div class="form-group col-lg-10">
                        <label >Email</label>
                        <input type="email" class="form-control" id="email"  name="email">
                    </div>
                    <div class="form-group col-lg-10 ">
                        <label >Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber"  name="phoneNumber">
                    </div>

                    <div class="form-group col-lg-10">
                        <label >Address</label>
                        <input type="text" class="form-control" id="address"  name="address">
                    </div>
                    <div class="form-group col-lg-10">
                        <label >Apartment</label>
                        <input type="text" class="form-control" id="apt"  name="apt">
                    </div>
                    <div class="form-group col-lg-10">
                        <label >City</label>
                        <input type="text" class="form-control" id="city"  name="city">
                    </div>
                    <div class="form-group col-lg-10">
                        <label >Postal Code</label>
                        <input type="text" class="form-control" id="postalCode"  name="postalCode">
                    </div>

                    <div class="form-group col-lg-10">
                        <label >Country</label>
                        <input type="text" class="form-control" id="country"  name="country">
                    </div>

                    <button type="submit" class="btn btn-default"  >Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- /.container -->

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p class="m-0 text-center ">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>



</body>

</html>





