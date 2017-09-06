{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('fname', 'Fname:') !!}
			{!! Form::text('fname') !!}
		</li>
		<li>
			{!! Form::label('lname', 'Lname:') !!}
			{!! Form::text('lname') !!}
		</li>
		<li>
			{!! Form::label('photo_path', 'Photo_path:') !!}
			{!! Form::text('photo_path') !!}
		</li>
		<li>
			{!! Form::label('company', 'Company:') !!}
			{!! Form::text('company') !!}
		</li>
		<li>
			{!! Form::label('job_title', 'Job_title:') !!}
			{!! Form::text('job_title') !!}
		</li>
		<li>
			{!! Form::label('sex', 'Sex:') !!}
			{!! Form::text('sex') !!}
		</li>
		<li>
			{!! Form::label('place_origin', 'Place_origin:') !!}
			{!! Form::text('place_origin') !!}
		</li>
		<li>
			{!! Form::label('bio', 'Bio:') !!}
			{!! Form::textarea('bio') !!}
		</li>
		<li>
			{!! Form::label('slug', 'Slug:') !!}
			{!! Form::text('slug') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}