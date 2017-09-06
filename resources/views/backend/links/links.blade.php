{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('person_id', 'Person_id:') !!}
			{!! Form::text('person_id') !!}
		</li>
		<li>
			{!! Form::label('label', 'Label:') !!}
			{!! Form::text('label') !!}
		</li>
		<li>
			{!! Form::label('url', 'Url:') !!}
			{!! Form::text('url') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}