@extends('layouts.app')

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript">




    </script>
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
            <div class="col-lg-3">
                <div class="card-header">Dashboard</div>
                <a href="addProducts/{{$site_id}}">Add products</a>
                <a href="/home/showAllProducts/{{$site_id}}">Show all products</a>
                <a href="/home/searchProductName/{{$site_id}}">Find Product by name </a>

                <br/>

                <a href="/home/addCustomers/{{$site_id}}">Customer Registration</a>
                <a href="/home/showAllCustomers/{{$site_id}}">Show All Customers</a>
                <a href="/home/searchCustomerEmail">Find Customer by email</a>
                <br/>
                <a href="/home/addCategories/{{$site_id}}">Add Category</a>
                <a href="/home/showCategories/{{$site_id}}">show Category</a>
                <br/>
                <a href="/home/showAllOrders/{{$site_id}}">show Orders</a>
                <br/>
                <a href="/home/setTheme/{{$site_id}}">Customize Theme</a>
                <a href="/home/basicTheme/{{$site_id}}">Visit Your Site</a>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">Add Product</div>
                    <form method="post" action="/home/addProduct/{{$site_id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group col-lg-8">
                            <label >Product Name</label>
                            <input type="text" class="form-control" id="productName"  name="productName">
                        </div>
                        <div class="form-group col-lg-12">
                            <label >Description:</label>
                            <textarea type="text" class="form-control" id="productDescri" rows="5"  name="productDescri"></textarea>
                        </div>

                        <div>


                                <div class="input-group control-group increment" >
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">

                                    </div>
                                </div>




                        </div>
                        <div class="col-lg-8">
                        <label for="sel1">Select category (select one):</label>
                        <select class="form-control" id="sel1" name="sel1">
                            @foreach($category as $singleCategory)
                            <option>{{$singleCategory->category_name}}</option>
                            @endforeach
                             </select>

                        </div>
                        <div class="form-group col-lg-8">
                            <label >Price: $</label>
                            <input type="text" class="form-control" id="price"  name="price">
                        </div>


                        <div class="form-group col-lg-8 ">
                            <label >Cost Per Item: $</label>
                            <input type="text" class="form-control" id="costPerItem"  name="costPerItem">
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" value="charge">Charge Tax</label>
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Stock Keeping Unit</label>
                            <input type="text" class="form-control" id="stockKeepingUnit"  name="stockKeepingUnit">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Barcode</label>
                            <input type="text" class="form-control" id="barcode"  name="barcode">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Quantity</label>
                            <input type="text" class="form-control" id="quantity"  name="quantity">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="out">Out Of Stock</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="physical">Physical Product</label>
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Weight</label>
                            <input type="text" class="form-control" id="weight"  name="weight">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Country Of Origin</label>
                            <input type="text" class="form-control" id="country"  name="country">
                        </div>

                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection