@extends('layouts._master')

@section('content')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection
	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<th>#</th>
					<th>Name</th>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST'])!!}
				<h2>New Category</h2>
				{{ Form::label('name', 'Name:')}}
				{{ Form::text('name', null, ['class' => 'form-control'])}}
				{{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 20px;'])}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection