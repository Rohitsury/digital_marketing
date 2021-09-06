@extends('layouts.staff')


@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1> Create Ad </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('staff.ads.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="client_id">Client</label>
                        <select class="form-control" name="client_id" id="client_id">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Ad Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                            placeholder="Some tagline">
                        @error('title')<small id="helpId" class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <select name="platform" class="form-control">
                            <option value="FACEBOOK">FACEBOOK</option>
                            <option value="INSTAGRAM">INSTAGRAM</option>
                        </select>
                        @error('platform')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="banner">Banner</label>
                        <input type="file" class="form-control-file" name="banner" id="banner" placeholder="Banner"
                            aria-describedby="fileHelpId">
                        @error('description')<small id="fileHelpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Ad Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>

                        @error('description')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="datetime-local" class="form-control" name="start_date" id="start_date"
                            aria-describedby="helpId" placeholder="">
                        @error('start_date')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="datetime-local" class="form-control" name="end_date" id="end_date" aria-describedby="helpId"
                            placeholder="">
                        @error('end_date')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount" id="amount" aria-describedby="helpId"
                            placeholder="Amount">
                        @error('amount')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" name="status" id="status">
                        <option value="RUNNING">RUNNING</option>
                        <option value="STOPPED">STOPPED</option>
                        <option value="UPCOMING">UPCOMING</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
