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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Product Info</div>
                    <form method="post" action="/home/updateProductToTable/{{$updateProduct->id}}/{{$site_id}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                        <div class="form-group col-lg-8">
                            <label >Product Name</label>
                            <input type="text" class="form-control" id="productName"  name="productName" value="{{$updateProduct->product_name}}">
                        </div>
                        <div class="form-group col-lg-12">
                            <label >Description:</label>
                            <textarea type="text" class="form-control" id="productDescri" rows="5"  name="productDescri " >{{$updateProduct->product_description}}</textarea>
                        </div>
                        <div>


                            <div class="input-group control-group increment" >
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">

                                </div>
                            </div>




                        </div>
                        <div class="form-group  col-lg-8">
                            <label >Price</label>
                            <input type="text" class="form-control" id="price"  name="price" value="{{$updateProduct->price}}">
                        </div>
                        <div class="col-lg-8">
                            <label for="sel1">Select category (select one):</label>
                            <select class="form-control" id="sel1" name="sel1">
                                @foreach($category as $singleCategory)
                                    <option>{{$singleCategory->category_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group col-lg-8 ">
                            <label >Cost Per Item</label>
                            <input type="text" class="form-control" id="costPerItem"  name="costPerItem" value="{{$updateProduct->cost_per_item}}">
                        </div>


                        <div class="form-group col-lg-8">
                            <label >Stock Keeping Unit</label>
                            <input type="text" class="form-control" id="stockKeepingUnit"  name="stockKeepingUnit" value="{{$updateProduct->stock_keeping_unit}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Barcode</label>
                            <input type="text" class="form-control" id="barcode"  name="barcode" value="{{$updateProduct->barcode}}">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Quantity</label>
                            <input type="text" class="form-control" id="quantity"  name="quantity" value="{{$updateProduct->quantity}}">
                        </div>
                                                <div class="form-group col-lg-8">
                            <label >Weight</label>
                            <input type="text" class="form-control" id="weight"  name="weight" value="{{$updateProduct->weight}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Country Of Origin</label>
                            <input type="text" class="form-control" id="country"  name="country" value="{{$updateProduct->country_of_origin}}">
                        </div>

                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection