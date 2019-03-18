@extends('layouts.app')

@section('content')
    <div class="container dashBoard">
        <div class="row ">

            <div class="card col-lg-12">
                <div class="card-header">List Of Sites</div>
                <h5>Click & Work on your site </h5>
                <ul>
                @foreach($sites as $singleSite)
                    <ol><h6 class="siteList"> <a href="/home/{{$singleSite->id}}">{{$singleSite->store_name}}</a>
                   {{$singleSite->created_at->diffForHumans()}}</h6></ol>
                    @endforeach

                <ol><a href="addNewSite" class="btn btn-primary">Add New Site</a></ol>
                </ul>
            </div>
        </div>
    </div>
    </div>
@endsection
