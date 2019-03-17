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
                        <th>order id</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone no</th>
                        <th>Address</th>
                        <th>Apartment</th>
                        <th>City</th>
                        <th>PostalCode</th>
                        <th>Country</th>
                        <th>Status</th>

                        <th>Products</th>
                        <th>Delete</th>
                        <th>Update Status</th>

                    </tr>
                    </thead>
                    @if(isset($_GET['search']))
                        <tbody>
                        @foreach($orders as $singleOrder)
                            <tr>
                                <td>{{$singleOrder->id}}</td>
                                <td>{{$singleOrder->shipping_name}}</td>
                                <td>{{$singleOrder->shipping_email}}</td>
                                <td>{{$singleOrder->shipping_phone}}</td>
                                <td>{{$singleOrder->shipping_address}}</td>
                                <td>{{$singleOrder->shipping_apt}}</td>
                                <td>{{$singleOrder->shipping_city}}</td>
                                <td>{{$singleOrder->shipping_postalcode}}</td>
                                <td>{{$singleOrder->shipping_country}}</td>
                                <td>{{$singleOrder->shipping_status}}</td>

                                <td>@foreach($orderProduct as $singleOrderProduct )
                                        @if($singleOrder->id && $singleOrderProduct->order_id)
                                            <?php
                                            echo $singleOrderProduct->product_id.',';
                                            ?>
                                        @endif

                                    @endforeach
                                </td>

                                <td><a class="btn btn-danger "  href="#">Delete</a></td>

                           </tr>
                        @endforeach
                        </tbody>
                    @else
                        <tbody>
                        @foreach($orders as $singleOrder)
                            <tr>
                                <td>{{$singleOrder->id}}</td>
                                <td>{{$singleOrder->shipping_name}}</td>
                                <td>{{$singleOrder->shipping_email}}</td>
                                <td>{{$singleOrder->shipping_phone}}</td>
                                <td>{{$singleOrder->shipping_address}}</td>
                                <td>{{$singleOrder->shipping_apt}}</td>
                                <td>{{$singleOrder->shipping_city}}</td>
                                <td>{{$singleOrder->shipping_postalcode}}</td>
                                <td>{{$singleOrder->shipping_country}}</td>
                                <td>{{$singleOrder->status}}
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
<td><button type="button" class="btn btn-success  text-right" data-toggle="modal" data-target="#myModal">Update Status</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    @endif
                </table>
            </div>

        </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title text-left">Add Category</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="GET" action="/home/showAllOrders/updateStatus/{{$site_id}}/">

                                <div class="form-group col-lg-8">
                                    <label >Order_id</label>
                                    <input type="text" class="form-control" id="orderId"  name="orderId">
                                </div>

                                <div class="form-group col-lg-8">
                                    <label >Status</label>
                                    <select class="form-control" id="sel1" name="sel1">
                                        <option>Complete</option>
                                        <option>On Delivery</option>
                                        <option>Cancelled</option>
                                        <option>In progress</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-default"  >Submit</button> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>

                </div>
            </div>
    </div>

@endsection