@extends('layouts.staff')


@section('content')

    <div class="container">
        <div class="row card-deck">
            <div class="col-12 col-md-3 card border-left-primary bg-success text-light">
                <div class="card-body">
                    <h4 class="card-title">Running Ads</h4>
                    <p class="card-text">{{ count($ads->where('status', 'RUNNING')) }}</p>
                </div>
            </div>
            <div class="col-12 col-md-3 card border-left-primary bg-danger text-light">
                <div class="card-body">
                    <h4 class="card-title">Stopped Ads</h4>
                    <p class="card-text">{{ count($ads->where('status', 'STOPPED')) }}</p>
                </div>
            </div>
        </div>
    </div>





@endsection
