@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                     <form action="siteRegistration" method="get">

                         <div class="form-group col-sm-10">
                             <label>Store Name:</label>

                             <input type="text" class="form-control" id="Sadd"  name="store">
                         </div>
                         <div class="form-group col-sm-10">
                             <label>Domain Name:</label>

                             <input type="text" class="form-control" id="city"  name="Domain">
                         </div>
                         <div class="form-group col-sm-10">
                             <label>IP Address:</label>

                             <input type="text" class="form-control" id="pro"  name="ipAddress">
                         </div>
                         <button type="submit" class="btn btn-default">Submit</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection
