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
                    <div class="card-header">Add Product</div>
                    <form method="GET" action="/updateProductToTable/{{$updateProduct->id}}">

                        <div class="form-group col-lg-8">
                            <label >Product Name</label>
                            <input type="text" class="form-control" id="productName"  name="productName" value="{{$updateProduct->product_name}}">
                        </div>
                        <div class="form-group col-lg-12">
                            <label >Description:</label>
                            <textarea type="text" class="form-control" id="productDescri" rows="5"  name="productDescri " >{{$updateProduct->product_description}}</textarea>
                        </div>
                        <div class="form-group  col-lg-8">
                            <label >Price</label>
                            <input type="text" class="form-control" id="price"  name="price" value="{{$updateProduct->price}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Compare At Price</label>
                            <input type="text" class="form-control" id="compareAtPrice"  name="compareAtPrice" value="{{$updateProduct->compare_at_price}}">
                        </div>

                        <div class="form-group col-lg-8 ">
                            <label >Cost Per Item</label>
                            <input type="text" class="form-control" id="costPerItem"  name="costPerItem" value="{{$updateProduct->cost_per_item}}">
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" value="charge">Charge Tax</label>
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
                            <label >Inventory Policy</label>
                            <input type="text" class="form-control" id="inventoryPolicy"  name="inventoryPolicy" value="{{$updateProduct->inventory_policy}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Quantity</label>
                            <input type="text" class="form-control" id="quantity"  name="quantity" value="{{$updateProduct->quantity}}">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="out">Out Off Stock</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="physical">Physical Product</label>
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Weight</label>
                            <input type="text" class="form-control" id="weight"  name="weight" value="{{$updateProduct->weight}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Country Of Origin</label>
                            <input type="text" class="form-control" id="country"  name="country" value="{{$updateProduct->country_of_origin}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >HS CODE</label>
                            <input type="text" class="form-control" id="hsCode"  name="hsCode" value="{{$updateProduct->hs_code}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Fulfillment Service </label>
                            <input type="text" class="form-control" id="fulfilmentService"  name="fulfilmentService" value="{{$updateProduct->fulfilment_service}}">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="seo">SEO Listing</label>
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Page Title </label>
                            <input type="text" class="form-control" id="pageTitle"  name="pageTitle" value="{{$updateProduct->page_title}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Meta Description </label>
                            <input type="text" class="form-control" id="metaDescription"  name="metaDescription" value="{{$updateProduct->meta_description}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >URL and Handle </label>
                            <input type="text" class="form-control" id="url&handle"  name="url&handle" value="{{$updateProduct->urlhandle}}">
                        </div>
                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection