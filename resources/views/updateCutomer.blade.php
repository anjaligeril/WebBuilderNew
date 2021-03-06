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

    <style>
        body{
            font-family: "Playfair Display", Georgia, serif;

        }
        .container{
            height:450px;
        }
        .card-header{
            font-size: 23px;
            font-weight: bold;

            color: #23282e;
        }
        .card-body{

            color:#2e353d;
        }
        footer{
            height:50px;
        }
    </style>
</head>

<body>


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
<!-- Page Content -->
<div class="container">
<div class="card ">
    <div class="card-header">Update Customer Info</div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
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
    <div class="col-lg-2"></div>
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





