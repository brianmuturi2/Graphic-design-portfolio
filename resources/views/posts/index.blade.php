@extends('layouts._master')

@section('content')
<div class=" col-md-12 col-md-offset-0.5">
<div class="row">
	<div class="col-md-12">
		<h1>All posts</h1>
	</div>
</div>
	<br />
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Client</th>
				<th>Date</th>
				<th>Skills</th>
				<th>Link</th>
				<th>Body</th>
				<th>Created At</th>
				<th>{{ Html::linkRoute('posts.create', 'Create a post', [], ['class'=> 'btn btn-primary btn-sm'])}}</th>
			</thead>
			<tbody>
			@foreach ($posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ $post->client }}</td>
						<td>{{ $post->projectDate }}</td>
						<td>{{ $post->skills }}</td>
						<td>{{ $post->projectLink }}</td>
						<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
						<td>{{ date('j M, Y', strtotime($post->created_at)) }}</td>
						<td><a href="{{ route('posts.show', $post->id)}}" class="btn btn-default btn-sm">view</a>
							<a href="{{ route('posts.edit', $post->id)}}" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $posts->links(); !!}
		</div>
	</div>
</div>
</div>
@endsection