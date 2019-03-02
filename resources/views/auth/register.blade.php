@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <form  method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}
                        <div class="form-group col-sm-10">
                            <label>{{ __('first_name') }}</label>


                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group col-sm-10">
                            <label>{{ __('last_name') }}</label>

                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>





                        <div class="form-group col-sm-10">
                            <label>Apt Address:</label>

                                <input type="text" class="form-control" id="add"  name="add">
                            </div>

                        <div class="form-group col-sm-10">
                            <label>Street Address:</label>

                                <input type="text" class="form-control" id="Sadd"  name="Sadd">
                            </div>
                        <div class="form-group col-sm-10">
                            <label>City:</label>

                                <input type="text" class="form-control" id="city"  name="city">
                            </div>
                        <div class="form-group col-sm-10">
                            <label>Province:</label>

                                <input type="text" class="form-control" id="pro"  name="pro">
                            </div>
                        <div class="form-group col-sm-10">
                            <label >Country:</label>

                                <input type="text" class="form-control" id="count"  name="count">
                            </div>
                        <div class="form-group col-sm-10">
                            <label>Phone number:</label>

                                <input type="text" class="form-control" id="phone"  name="phone" >
                            </div>

                        <div class="form-group col-sm-10">
                            <label>Postal Code:</label>

                            <input type="text" class="form-control" id="phone"  name="code" >
                        </div>

                        <div class="form-group col-md-10">
                            <label>{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group col-md-10">
                            <label>{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group col-md-10">
                            <label>{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                        <div class="checkbox">
                            <label><input type="checkbox" name="remember" > Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
