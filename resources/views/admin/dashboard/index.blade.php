@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row card-deck">
            <div class="col-12 col-md-3 card">
                <div class="card-body">
                    <h4 class="card-title">Clients</h4>
                    <p class="card-text">{{ count($clients) }}</p>
                </div>
            </div>
            <div class="col-12 col-md-3 card">
                <div class="card-body">
                    <h4 class="card-title">Staff</h4>
                    <p class="card-text">{{ count($staff) }}</p>
                </div>
            </div>
            <div class="col-12 col-md-3 card">
                <div class="card-body">
                    <h4 class="card-title">Ads</h4>
                    <p class="card-text">{{ count($staff) }}</p>
                </div>
            </div>
        </div>
    </div>





@endsection
