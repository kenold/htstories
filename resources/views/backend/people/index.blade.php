@extends('backend.layouts.master')

@section('content')   

    <table class="table">
    <thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Company</th>
        <th>Job Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($people as $person)
            <tr>
            <th scope="row">{{ $person->id }}</th>
            <td>{{ $person->name }}</td>
            <td>{{ $person->company }}</td>
            <td>{{ $person->job_title }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

    <nav aria-label="Page navigation">
        {{ $people->links() }}
    </nav>
@endsection    