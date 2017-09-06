{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::label('cover_path', 'Cover_path:') !!}
			{!! Form::text('cover_path') !!}
		</li>
		<li>
			{!! Form::label('person_id', 'Person_id:') !!}
			{!! Form::text('person_id') !!}
		</li>
		<li>
			{!! Form::label('summary', 'Summary:') !!}
			{!! Form::text('summary') !!}
		</li>
		<li>
			{!! Form::label('content', 'Content:') !!}
			{!! Form::textarea('content') !!}
		</li>
		<li>
			{!! Form::label('video_url', 'Video_url:') !!}
			{!! Form::text('video_url') !!}
		</li>
		<li>
			{!! Form::label('video_embed', 'Video_embed:') !!}
			{!! Form::textarea('video_embed') !!}
		</li>
		<li>
			{!! Form::label('audio_url', 'Audio_url:') !!}
			{!! Form::text('audio_url') !!}
		</li>
		<li>
			{!! Form::label('audio_embed', 'Audio_embed:') !!}
			{!! Form::textarea('audio_embed') !!}
		</li>
		<li>
			{!! Form::label('language', 'Language:') !!}
			{!! Form::text('language') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}