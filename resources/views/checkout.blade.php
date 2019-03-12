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
                    <div class="card-header">Shipping Address</div>
                    <form method="GET" action="/home/basicTheme/AddcheckOut/{{$id}}">

                        <div class="form-group col-lg-8">
                            <label >Full Name</label>
                            <input type="text" class="form-control" id="firstName"  name="firstName">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  name="email">
                        </div>
                        <div class="form-group col-lg-8 ">
                            <label >Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber"  name="phoneNumber">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Address</label>
                            <input type="text" class="form-control" id="address"  name="address">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Apartment</label>
                            <input type="text" class="form-control" id="apt"  name="apt">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >City</label>
                            <input type="text" class="form-control" id="city"  name="city">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Postal Code</label>
                            <input type="text" class="form-control" id="postalCode"  name="postalCode">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Country</label>
                            <input type="text" class="form-control" id="country"  name="country">
                        </div>

                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection