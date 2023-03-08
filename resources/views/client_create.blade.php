@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter client name">
            </div>

            <div class="form-group">
                <label for="email">Client email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter client email">
            </div>

            <div class="form-group">
                <label for="company_id">Client company id</label>
                <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Enter company id">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
