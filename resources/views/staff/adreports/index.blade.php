@extends('layouts.staff')


@section('content')

    <div class="container">
        <h1>Ad report</h1>
        <div class="row my-3">
            <div class="col-12">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Started</th>
                            <th>Client</th>
                            <th>Ad</th>
                            <th>Ad CPC</th>
                            <th>Clicks</th>
                            <th>Estimated Spendings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($adreports as $adreport)
                            <tr>
                                <td>{{ $adreport->ad->start_date->diffForHumans() }}</td>
                                <td scope="row">{{ $adreport->client->name }}</td>
                                <td>{{ $adreport->ad->title }}</td>
                                <td><i class="fa fa-rupee-sign" aria-hidden="true"></i> {{ $adreport->cpc }} &nbsp; <span class="badge badge-primary">{{ $adreport->ad->status }}</span></td>
                                <td>{{ $adreport->clicks }}</td>
                                <td>
                                   <i class="fa fa-rupee-sign" aria-hidden="true"></i> {{ $adreport->cpc * $adreport->clicks }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
