@extends('layouts._master')

@section('content')

	@section('stylesheets')

		{!! Html::style('css/parsley.css') !!}

	@endsection

	<div class="row col-md-offset-1">
	{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT', 'data-parsley-validate'=> '', 'files'=>true])!!}
		<div class="well col-md-7">
			{{ Form::label('category_id', 'Category:')}}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control'])}}

			{{ Form::label('title', 'Title:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('title', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('slug', null, ['class' => 'form-control', 
			'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('client', 'Client:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('client', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('projectDate', 'Date:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('projectDate', null, 
			['class' => 'form-control input-lg', 'required' => '', 
			'maxlength' => '60', 'minlength' => '2' ]) }}

			{{ Form::label('skills', 'Skills:',
				 ['class' => 'form-spacing-top' ])}}
			{{ Form::text('skills', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('projectLink', 'Link:', ['class' => 'form-spacing-top'])}}
			{{ Form::text('projectLink', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '60', 'minlength' => '2'])}}

			{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top'])}}
			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '2'])}}

			{{ Form::label('featured_image', 'Update Featured Image', ['class' => 'form-spacing-top'])}}
			{{ Form::file('featured_image')}}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('j M, Y h:ia',strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('j M, Y h:ia',strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
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