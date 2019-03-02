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
                    <div class="card-header">Add Customer</div>
                    <form method="GET" action="/addCustomer">

                        <div class="form-group col-lg-8">
                            <label >First Name</label>
                            <input type="text" class="form-control" id="firstName"  name="firstName">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Last Name</label>
                            <input type="text" class="form-control" id="lastName"  name="lastName">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  name="email">
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
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