@extends('layouts.admin')

@section('content')
    <h1>{{ $client->name }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('admin.clients.update', $client) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Client Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="name of client" value="{{ old('name', $client->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Email" value="{{ old('email', $client->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile number</label>
                        <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="helpId"
                            placeholder="10 digit only" value="{{ old('mobile', $client->mobile) }}">
                        @error('mobile')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address"
                            rows="3">{{ old('address', $client->address) }}</textarea>
                        @error('address')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
