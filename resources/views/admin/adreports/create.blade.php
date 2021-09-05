@extends('layouts.admin')


@section('content')

    <div class="container">
        <h1>Ad report</h1>
        <div class="row my-3">
            <div class="col-12">
                <form action="{{ route('admin.adreports.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="client_id">Select Client</label>
                        <select class="form-control" name="client_id" id="client_id" required>
                            <option></option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ad_id">Select Ad</label>
                        <select class="form-control" name="ad_id" id="ad_id" required>
                            <option></option>
                            @foreach ($ads as $ad)
                                <option value="{{ $ad->id }}">{{ $ad->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cpc">CPC</label>
                        <input type="number" class="form-control" name="cpc" id="cpc" aria-describedby="helpId"
                            placeholder="Cost per click">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                        <label for="clicks">CPC</label>
                        <input type="number" class="form-control" name="clicks" id="clicks" aria-describedby="helpId"
                            placeholder="No of clicks">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
