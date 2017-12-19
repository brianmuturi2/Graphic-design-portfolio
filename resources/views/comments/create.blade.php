@extends('layouts._master')

@section('content')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Create New Comment</h3>
		<hr>
		{!! Form::open(array('route' => 'comments.store', 'data-parsley-validate'=> '', 
		'files'=>true))!!}

			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('body', 'Comment Body:')}}
			{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '5')) }}

			{{ Form::label('featured_photo', 'Upload Comment Photo')}}
			{{ Form::file('featured_photo')}}

			{{ Form::submit('Create Comment', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection