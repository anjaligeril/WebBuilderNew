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

    <div class="row">


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

            @if($success)
                <div class="alert alert-success">
                    <h5>Successfully deleted</h5>
                </div>
            @endif
            <div class="row ">


                <h3 class="">cart</h3>
                <div class="row">
                    <div class="card">

                        <table class="table table-hover">
                            <thead>
                            <tr>


                                <th>product_name</th>
                                <th>product Image</th>
                                <th>price </th>
                                <th>quantity </th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $singleProduct)
                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td>{{$singleProduct->price}}</td>
                                    <td>{{$singleProduct->quantity}}</td>
                                    <td><a class="btn btn-danger "  href="/home/basicTheme/removeFromCart/{{$site_id}}/{{$singleProduct->id}}">Delete</a></td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>





            </div>
            <?php
            if(!isset($_SESSION)) {
                session_start();
            }
            ?>
            <a class="btn btn-info" href="/home/basicTheme/{{$site_id}}">Continue shopping</a>
            <a class="btn btn-success" href="/home/checkout/{{$site_id}}/{{$_SESSION["customer_id"]}}">CheckOut</a>
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