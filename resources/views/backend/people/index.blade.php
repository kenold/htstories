@extends('backend.layouts.master')

@section('content')   
    
    <h3>People Listing <small>({{ $people->total() }})</small></h3>      

    <table class="table table-hover">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Company</th>
            <th>Job Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
                <tr>
                <th scope="row">{{ $person->id }}</th>
                <td>{{ $person->name }}</td>
                <td>{{ $person->sex }}</td>
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