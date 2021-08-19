@extends('layouts.admin')


@section('content')

<div class="container">
        <h1>Client list</h1>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">New Client</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $client->name }}</td>
                                <td>
                                    <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
