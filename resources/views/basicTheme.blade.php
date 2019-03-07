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

<!-- Navigation -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{$theme1->site_name}}</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
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

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item One</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Two</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Three</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Four</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Five</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{asset('images/product.jpg')}}" height="250px" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Item Six</a>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

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