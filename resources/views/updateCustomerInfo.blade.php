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
                    <div class="card-header">Update Customer Info</div>
                    <form method="get" action="/home/updateToCustomerTable/{{$updateCustomer->id}}/{{$site_id}}">

                        <div class="form-group col-lg-8">
                            <label >First Name</label>
                            <input type="text" class="form-control" id="firstName"  name="firstName" value="{{$updateCustomer->first_name}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Last Name</label>
                            <input type="text" class="form-control" id="lastName"  name="lastName" value="{{$updateCustomer->last_name}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  name="email" value="{{$updateCustomer->email}}">
                        </div>

                        <div class="form-group col-lg-8 ">
                            <label >Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber"  name="phoneNumber" value="{{$updateCustomer->phone_no}}">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Address</label>
                            <input type="text" class="form-control" id="address"  name="address" value="{{$updateCustomer->address}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Apartment</label>
                            <input type="text" class="form-control" id="apt"  name="apt" value="{{$updateCustomer->apt}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >City</label>
                            <input type="text" class="form-control" id="city"  name="city" value="{{$updateCustomer->city}}">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Postal Code</label>
                            <input type="text" class="form-control" id="postalCode"  name="postalCode" value="{{$updateCustomer->postal_code}}">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Country</label>
                            <input type="text" class="form-control" id="country"  name="country" value="{{$updateCustomer->country}}">
                        </div>

                        <button type="submit" class="btn btn-default"  >Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection