@extends('layouts._master')
@section('content')
	<div class="row col-md-offset-1">
		<div class="well col-md-7">
			<h3><label>Title:</label>{{$post->title}}</h3>
			<hr >
			<p class="lead"><label>Body:</label>{{$post->body}}</p>
			<hr >
			<br />
			<img src="{{ asset('images/' . $post->image)}}" height="400" width="640"/>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>{{($post->category->name)}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Url Slug:</label>
					<p><a href="{{ route('bmn.single', $post->slug) }}">{{url($post->slug)}}</a></p>
				</dl>
				<dl class="dl-horizontal">
					<label>Client:</label>
					<p>{{($post->client)}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Date:</label>
					<p>{{($post->projectDate)}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Skills:</label>
					<p>{{($post->skills)}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Link:</label>
					<p>{{($post->projectLink)}}</p>
				</dl>					
				<label>Created At:</label>
					<p>{{ date('j M, Y h:ia',strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('j M, Y h:ia',strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])!!}
						{!! Form::close()!!}
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< See all posts', [], ['class'=> 'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection