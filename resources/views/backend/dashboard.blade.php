@extends('backend.layouts.master')

@section('content')    

    <div class="row mt-3">
        <div class="col-md-4">
            <h4 class="mb-3 mt-3">People <small>({{ $people->total() }})</small></h4>
            
            <ul class="list-group">                
                @foreach($people as $person)
                    <li class="list-group-item">{{ $person->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h4 class="mb-3 mt-3">Categories <small>({{ $categories->total() }})</small></h4>

            <ul class="list-group">                
                @foreach($categories as $category)
                    <li class="list-group-item">{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h4 class="mb-3 mt-3">Tags <small>({{ $tags->total() }})</small></h4>

            <ul class="list-unstyled">                
                @foreach($tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
@endsection 