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
        html,body{
            font-family: "Playfair Display", Georgia, serif;
        }
        .ourProduct {
            color: darkred;
        }
        .ourProduct1{
            margin-top: 50px !important;
        }
        .navbar-brand,.hero_text{
            text-transform: uppercase;

        }

        .hero_text{
            color: yellow;
        }

        .card-header{
            font-size: 23px;
            font-weight: bold;
            background-color:#e1ffff ;
            color: #23282e;
            padding-bottom: 50px;
        }
        .card-body{
            background-color: #e1ffff ;
            color:#2e353d;
        }
    </style>
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
<div class="container ">

    <div class="row ">
        <div class="col-lg-2 "></div>
        <div class="card col-lg-8 ">
            <div class="card-header">Customer Registration</div>
            <div class="card-body">

                <form method="POST" action="/customerLogin/login/{{$site_id}}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>


                        </div>
                    </div>
                </form>

            </div>
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

