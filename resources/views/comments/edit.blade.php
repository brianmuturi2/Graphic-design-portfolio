@extends('layouts._master')

@section('content')

	@section('stylesheets')

		{!! Html::style('css/parsley.css') !!}

	@endsection

	<div class="row col-md-offset-1">
	{!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method'=>'PUT', 'data-parsley-validate'=> '', 'files'=>true])!!}
		<div class="well col-md-7">

			{{ Form::label('name', 'Name:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('name', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '2'])}}

			{{ Form::label('featured_photo', 'Update Featured Phot', ['class' => 'form-spacing-top'])}}
			{{ Form::file('featured_photo')}}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('j M, Y h:ia',strtotime($comment->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('j M, Y h:ia',strtotime($comment->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('comments.show', 'Cancel', array($comment->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save', ['class' => 'btn btn-success btn-block'])}}
					</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}
	</div>
@endsection
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection