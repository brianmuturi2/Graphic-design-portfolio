@extends('layouts._master')

@section('content')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Create New Post</h3>
		<hr>
		{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate'=> '', 
		'files'=>true))!!}
		
			{{ Form::label('category_id', 'Category:')}}
			<select class="form-control" name="category_id">
				@foreach($categories as $category)
					<option value='{{$category->id}}'>{{$category->name}}</option>
				@endforeach
			</select>

			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('slug', 'Slug:')}}
			{{ Form::text('slug', null, ['class'=>'form-control', 'required'=>'','minlength'=>'5', 'maxlength'=>'60'])}}

			{{ Form::label('client', 'Client:') }}
			{{ Form::text('client', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('projectDate', 'Date:') }}
			{{ Form::text('projectDate', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('skills', 'Skills:') }}
			{{ Form::text('skills', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('projectLink', 'Link:') }}
			{{ Form::text('projectLink', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '60', 'minlength' => '2')) }}

			{{ Form::label('body', 'Post Body:')}}
			{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '5')) }}

			{{ Form::label('featured_image', 'Upload Design Image')}}
			{{ Form::file('featured_image')}}

			{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection