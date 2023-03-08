@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('clients.update', $client->id) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Client Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
            </div>

            <div class="form-group">
                <label for="email">Client email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $client->email }}">
            </div>

            <div class="form-group">
                <label for="company_id">Client company id</label>
                <input type="text" class="form-control" id="company_id" name="company_id" value="{{ $client->company_id }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
