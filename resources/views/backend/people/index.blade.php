@extends('backend.layouts.master')

@section('content')
    <ul class="list-unstyled">
        @foreach($people as $person)
            <li>{{ $person->name }}</li>
        @endforeach
    </ul>

    <nav aria-label="Page navigation">
        {{ $people->links() }}
    </nav>
@endsection    