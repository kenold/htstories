<ul>
    @foreach($people as $person)
        <li>{{ $person->name }}</li>
    @endforeach
</ul>