@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">

            <div class="card col-lg-5">
                <div class="card-header">Dashboard</div>
                @foreach($sites as $singleSite)
                    <h6> <a href="/home/{{$singleSite->id}}">{{$singleSite->store_name}}</a>
                   {{$singleSite->created_at->diffForHumans()}}</h6>
                    @endforeach
                <a href="addNewSite">Add New Site</a>
            </div>
        </div>
    </div>
    </div>
@endsection
