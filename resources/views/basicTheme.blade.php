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
                <li>
            <a href="/home/basicTheme/logout/{{$site_id}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                </li></ul>
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

    <div class="row">


        <div class=" hero col-lg-12">
            <image src="{{$theme1->hero_image_path}}" height="600px" width="100%"/>
            <h2 class=" hero_text text-center">{{$theme1->hero_text}}</h2>
        </div>
        <div class="row">
            <h1 class="text-center">Our Products</h1>
        </div>
        <div class="row">
            @foreach($products as $singleProduct)
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="card h-100">

                        <a href="#"><img class="card-img-top" src="{{$singleProduct->image_path}}" height="150px"  alt=""></a>

                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$singleProduct->product_name}}</a>
                            </h4>
                            <h5>{{$singleProduct->price}}</h5>
                            <p class="card-text">{{$singleProduct->product_description}}</p>
                            <a href="/home/basicTheme/addToCart/{{$site_id}}/{{$singleProduct->id}}" class="btn btn-success">Add cart</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

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

