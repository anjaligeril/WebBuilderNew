@extends('layouts.app')

@section('content')
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
                <form action="" method="get">
                <input type="text" class="form-control" id="Sadd"  name="site_name">
                <br>
                <button type="submit" class="btn btn-info">Update</button>
                <br/>
                </form>
                <br><br>
                <label>update The hero image</label>
                <form method="post" action="#" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="input-group control-group " >
                    <input type="file" name="filename[]" class="form-control">

                </div>
                    <br>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
                <br><br>
                <label>Update The Hero Text</label>
                <form action="" method="get">
                    <input type="text" class="form-control" id="Sadd"  name="hero_text">
                    <br>
                    <button type="submit" class="btn btn-info">Update</button>
                    <br/>
                </form>
                <br><br>

            </div>
            <div class="col-lg-9 theme">
                <iframe src="http://localhost:8000/basicTheme" height="800px" width="880px"></iframe>
            </div>


        </div>
    </div>
    </div>
@endsection
