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
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Category</h4>
                        </div>
                        <div class="modal-body">
                            <form method="GET" action="/home/addCategory/{{$id}}">

                                <div class="form-group col-lg-8">
                                    <label >Category Name</label>
                                    <input type="text" class="form-control" id="category_name"  name="category_name">
                                </div>

                                <div class="form-group col-lg-8">
                                    <label >Category Description</label>
                                    <textarea type="text" class="form-control" id="category_desc"  name="category_desc" rows="5"></textarea>
                                </div>

                                <button type="submit" class="btn btn-default"  >Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
@endsection