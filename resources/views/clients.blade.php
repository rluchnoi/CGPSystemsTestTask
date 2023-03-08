@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Clients</h1>
        <a href="{{ route('clients.create') }}">Add a new one</a>

        <div class="clients-table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a href="{{ route('clients.edit', $client->id) }}">Update</a>

                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $clients->links() }}
    </div>
@endsection
