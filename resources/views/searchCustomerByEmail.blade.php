@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Customer</div>
                    <form method="GET" action="/home/searchCustomerName1">


                        <input type="text" class="col-6" id="email"  name="email" placeholder="enter the customer name">


                        <button type="submit" class="btn btn-default"  >search</button>
                    </form>

                </div>
                <div class="row ">

                    @if(isset($_GET['email']))

                        <div class="col-lg-9">
                            <h4 class="">Customer</h4>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>customer_id</th>
                                    <th>site_id</th>
                                    <th>first name</th>
                                    <th>last name</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $singleCustomer)
                                    <tr>
                                        <td>{{$singleCustomer->id}}</td>
                                        <td>{{$singleCustomer->site_id}}</td>
                                        <td>{{$singleCustomer->first_name}}</td>
                                        <td>{{$singleCustomer->last_name}}</td>
                                        <td><a class="btn btn-danger" href="/home/deleteCustomer/{{$singleCustomer->id}}">Delete</a></td>
                                        <td><a class="btn btn-success" href="/home/updateCustomerInfo/{{$singleCustomer->id}}">Update</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection