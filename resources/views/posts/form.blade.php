@extends('layouts.app')



@section('content')
	{!! Form::model($post, ['route' => 'posts.store',
		'method' => 'post'
	]) !!}

		<div class="form-group">
			{!! Form::label('title') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body') !!}
			{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
		</div>


		

		{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}

	{!! Form::close() !!}
@endsection

	