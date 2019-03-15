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
                    <div class="card-header">Search Order</div>
                    <form method="GET" action="/home/searchCustomerName1/{{$site_id}}">


                        <input type="text" class="col-6" id="search"  name="search" placeholder="Search">


                        <button type="submit" class="btn btn-default"  >search</button>
                    </form>

                </div>
            </div>
            <div class="card">
                <div class="card-header">All Order</div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone no</th>
                        <th>Address</th>
                        <th>Apartment</th>
                        <th>City</th>
                        <th>PostalCode</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Update Status</th>
                        <th>Products</th>
                        <th>Delete</th>


                    </tr>
                    </thead>
                    @if(isset($_GET['search']))
                        <tbody>
                        @foreach($orders as $singleOrder)
                            <tr>
                                <td>{{$singleOrder->shipping_name}}</td>
                                <td>{{$singleOrder->shipping_email}}</td>
                                <td>{{$singleOrder->shipping_phone}}</td>
                                <td>{{$singleOrder->shipping_address}}</td>
                                <td>{{$singleOrder->shipping_apt}}</td>
                                <td>{{$singleOrder->shipping_city}}</td>
                                <td>{{$singleOrder->shipping_postalcode}}</td>
                                <td>{{$singleOrder->shipping_country}}</td>
                                <td>{{$singleOrder->shipping_status}}</td>
                                <form action="/home/showAllOrders/updateStatus/{{$site_id}}/{{$singleOrder->id}}">
                                <td><select class="form-control" name="status">
                                        <option>Complete</option>
                                        <option>On Delivery</option>
                                        <option>Cancelled</option>
                                        <option>In progress</option>
                                    </select></td><td>
                                    <button class="btn btn-success" type="submit">Update</button></td></form>
                                <td>@foreach($orderProduct as $singleOrderProduct )
                                        @if($singleOrder->id && $singleOrderProduct->order_id)
                                            <?php
                                            echo $singleOrderProduct->product_id.',';
                                            ?>
                                        @endif

                                    @endforeach
                                </td>

                                <td><a class="btn btn-danger "  href="#">Delete</a></td>
                                <td></td>
                           </tr>
                        @endforeach
                        </tbody>
                    @else
                        <tbody>
                        @foreach($orders as $singleOrder)
                            <tr>
                                <td>{{$singleOrder->shipping_name}}</td>
                                <td>{{$singleOrder->shipping_email}}</td>
                                <td>{{$singleOrder->shipping_phone}}</td>
                                <td>{{$singleOrder->shipping_address}}</td>
                                <td>{{$singleOrder->shipping_apt}}</td>
                                <td>{{$singleOrder->shipping_city}}</td>
                                <td>{{$singleOrder->shipping_postalcode}}</td>
                                <td>{{$singleOrder->shipping_country}}</td>
                                <td>{{$singleOrder->shipping_status}}
                                    </td>

                                <td>@foreach($orderProduct as $singleOrderProduct )
                                        @if($singleOrder->id && $singleOrderProduct->order_id)
                                            <?php
                                            echo $singleOrderProduct->product_id.',';
                                            ?>
                                        @endif

                                    @endforeach
                                </td>
                                <td><a class="btn btn-danger "  href="#">Delete</a></td>
                                <form action="/updateStatus/{{$site_id}}/{{$singleOrder->id}}" method="get">
                                    <td>
                                        <div class="form-group"><select class="form-control" id="status" name="status">
                                                <option>Complete</option>
                                                <option>On Delivery</option>
                                                <option>Cancelled</option>
                                                <option>In progress</option>
                                            </select></div>
                                    <td>
                                        <div class="form-group">
                                            <button class="btn btn-success" href="">Update</button></div></td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    @endif
                </table>
            </div>

        </div>

    </div>

@endsection