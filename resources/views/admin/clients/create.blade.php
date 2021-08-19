@extends('layouts.admin')

@section('content')
    <h1>Create new client</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('admin.clients.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Client Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="name of client">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile number</label>
                        <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="helpId"
                            placeholder="10 digit only">
                        @error('mobile')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
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
