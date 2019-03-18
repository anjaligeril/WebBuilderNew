@extends('layouts.app')

@section('content')
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
<style>
    .theme{
        height: 500px;
    }

</style>
    <div class="container">
        <div class="row ">

            <div class="card col-lg-3 customize">
            <h4>Customize your theme</h4>

<label>Update The site name</label>
                <form method="post" action="/home/settingTheme/{{$id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="text" class="form-control" id="Sadd"  name="site_name">
                    <br>

                    <br><br>
                    <label>update The hero image</label>

                    <div class="input-group control-group " >
                        <input type="file" name="filename[]" class="form-control" >

                    </div>
                    <br>

                    <br><br>



                    <label>Update The Hero Text</label>

                    <input type="text" class="form-control" id="Sadd"  name="hero_text">
                    <br>
                    <button type="submit" class="btn btn-info" style="margin-left: 80px">Update</button><br/>
                    <br/>
                    <a href="/home/{{$id}}" class="btn btn-success" > Site DashBoard </a>
                     <a href="/home/basicTheme/{{$id}}" class="btn btn-primary"> Visit Your Site</a>
                    <br/>
                </form>
                <br><br>

            </div>
            <div class="col-lg-9 theme">
                <iframe src="http://localhost:8000/home/basicTheme/{{$id}}" height="800px" width="880px"></iframe>
            </div>


        </div>
    </div>
    </div>
@endsection
