@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Companies</h1>
        <a href="{{ route('companies.create') }}">Add a new one</a>

        <div class="companies-table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->description }}</td>
                            <td>
                                <a href="{{ route('companies.edit', $company->id) }}">Update</a>

                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
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

        {{ $companies->links() }}
    </div>
@endsection
