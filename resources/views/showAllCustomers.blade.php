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

                <div class="card">
                    <div class="card-header">All Customers</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>customer_id</th>
                            <th>site_id</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>email</th>
                            <th>phone_no</th>
                            <th>address</th>
                            <th>apt</th>
                            <th>city</th>
                            <th>postal_code</th>
                            <th>country</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $singleCustomer)
                            <tr>
                                <td>{{$singleCustomer->id}}</td>
                                <td>{{$singleCustomer->site_id}}</td>
                                <td>{{$singleCustomer->first_name}}</td>
                                <td>{{$singleCustomer->last_name}}</td>
                                <td>{{$singleCustomer->email}}</td>
                                <td>{{$singleCustomer->phone_no}}</td>
                                <td>{{$singleCustomer->address}}</td>
                                <td>{{$singleCustomer->apt}}</td>
                                <td>{{$singleCustomer->city}}</td>
                                <td>{{$singleCustomer->postal_code}}</td>
                                <td>{{$singleCustomer->country}}</td>
                                <td><a class="btn btn-danger" href="/deleteCustomer/{{$singleCustomer->id}}">Delete</a></td>
                                <td><a class="btn btn-success" href="/updateCustomerInfo/{{$singleCustomer->id}}">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
@endsection
