@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">


                <h3 class="">cart</h3>
                <div class="row">
                    <div class="card">
                        <div class="card-header">Cart</div>
                        <table class="table table-hover">
                            <thead>
                            <tr>


                                <th>product_name</th>
                                <th>price </th>
                                <th>quantity </th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                           @foreach($carts as $singleProduct)
                                    <tr>

                                        <td>{{$singleProduct->product_id}}</td>
                                        <td>{{$singleProduct->price}}</td>
                                        <td>{{$singleProduct->quantity}}</td>
                                        <td><a class="btn btn-danger "  href="">Delete</a></td>

                                    </tr>
                        @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>





        </div>
        <a class="btn btn-info" href="/home/basicTheme/{{$site_id}}">Continue shopping</a>
        <a class="btn btn-success" href="/home/checkout/{{$site_id}}">CheckOut</a>
    </div>
    </div>
@endsection
