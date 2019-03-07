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
                    <div class="card-header">Update Category</div>
                    <form method="GET" action="/home/updateCategoryToTable/{{$updateCategory->id}}/{{$site_id}}">

                        <div class="form-group col-lg-8">
                            <label >Category Name</label>
                            <input type="text" class="form-control" id="category_name"  name="category_name" value="{{$updateCategory->category_name}}">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Category Description</label>
                            <textarea type="text" class="form-control" id="category_desc"  name="category_desc" rows="5"> {{$updateCategory->category_description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection