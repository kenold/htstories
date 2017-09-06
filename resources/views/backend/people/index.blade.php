@extends('backend.layouts.master')

@section('content')   
    <h1>Student Stories</h1>
      <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>

      <h3>People</h3>      

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