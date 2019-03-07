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
        <div class="row ">

            <div class="card">
                <div class="card-header">All Categories <button type="button" class="btn btn-info btn-lg text-right" data-toggle="modal" data-target="#myModal">+</button></div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>category_id</th>
                        <th>site_id</th>
                        <th>category_name</th>
                        <th>category_description</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $singleCategory)
                        <tr>
                            <td>{{$singleCategory->id}}</td>
                            <td>{{$singleCategory->site_id}}</td>
                            <td>{{$singleCategory->category_name}}</td>
                            <td>{{$singleCategory->category_description}}</td>
                            <td><a class="btn btn-danger" href="/home/deleteCategory/{{$singleCategory->id}}">Delete</a></td>
                            <td><a class="btn btn-success" href="/home/updateCategoryInfo/{{$singleCategory->id}}/{{$site_id}}">Update</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title text-left">Add Category</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="GET" action="/home/addCategory/{{$site_id}}">

                                <div class="form-group col-lg-8">
                                    <label >Category Name</label>
                                    <input type="text" class="form-control" id="category_name"  name="category_name">
                                </div>

                                <div class="form-group col-lg-8">
                                    <label >Category Description</label>
                                    <textarea type="text" class="form-control" id="category_desc"  name="category_desc" rows="5"></textarea>
                                </div>

                                <button type="submit" class="btn btn-default"  >Submit</button> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>

                </div>
            </div>

    </div>

    </div>
@endsection
