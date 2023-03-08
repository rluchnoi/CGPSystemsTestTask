@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        Your current token: {{$token}}

        <form action="{{ route('tokens.create') }}" method="POST">
            @csrf
            <button type="submit">Create a new token</button>
        </form>
    </div>
@endsection
