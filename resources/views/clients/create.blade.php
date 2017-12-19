@extends('layouts._master')

@section('content')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Create New Client Logo</h3>
		<hr>
		{!! Form::open(array('route' => 'clients.store', 'data-parsley-validate'=> '', 'files'=>true))!!}

			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('featured_logo', 'Upload Client Logo')}}
			{{ Form::file('featured_logo')}}

		{{ Form::submit('Create Client', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection