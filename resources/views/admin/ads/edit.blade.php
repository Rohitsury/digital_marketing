@extends('layouts.admin')


@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1> {{ $ad->client->name }} </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('admin.ads.update', $ad) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Ad Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Some tagline"
                            value="{{ old('title', $ad->title) }}">
                        @error('title')<small id="helpId" class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <select name="platform" class="form-control">
                            <option value="FACEBOOK" @if ($ad->platform == 'FACEBOOK') selected @endif>FACEBOOK</option>
                            <option value="INSTAGRAM" @if ($ad->platform == 'INSTAGRAM') selected @endif>INSTAGRAM</option>
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

                    <img src="{{ asset('storage/' . $ad->banner) }}" class="img-thumbnail" />


                    <div class="form-group">
                        <label for="description">Ad Description</label>
                        <textarea class="form-control" name="description"
                            rows="3">{{ old('description', $ad->description) }}</textarea>

                        @error('description')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="datetime-local" class="form-control" name="start_date" id="start_date" placeholder=""
                            value="{{ old('start_date', date('Y-m-d\TH:i', strtotime($ad->start_date))) }}">
                        @error('start_date')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="datetime-local" class="form-control" name="end_date" id="end_date" placeholder=""
                            value="{{ old('end_date', date('Y-m-d\TH:i', strtotime($ad->end_date))) }}">
                        @error('end_date')<small id="helpId"
                            class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="RUNNING" @if($ad->status == "RUNNING") selected @endif>RUNNING</option>
                            <option value="STOPED" @if($ad->status == "STOPED") selected @endif>STOPED</option>
                            <option value="UPCOMING" @if($ad->status == "UPCOMING") selected @endif>UPCOMING</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
