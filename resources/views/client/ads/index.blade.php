@extends('layouts.client')


@section('content')

    <div class="container">
        <h1>Ad list</h1>
        <div class="row my-3">
            <div class="col-12">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Platform</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ads as $ad)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $ad->title }}</td>
                                <td>{{ $ad->platform }}</td>
                                <td><span class="badge badge-primary">{{ $ad->status }}</span></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
