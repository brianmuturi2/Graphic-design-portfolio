@extends('layouts._master')

@section('content')
<div class=" col-md-12 col-md-offset-0.5">
<div class="row">
	<div class="col-md-12">
		<h1>All comments</h1>
	</div>
</div>
	<br />
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Body</th>
				<th>Created At</th>
				<th>Photo</th>
				<th>{{ Html::linkRoute('comments.create', 'New comment', [], ['class'=> 'btn btn-primary btn-sm'])}}</th>
			</thead>
			<tbody>
			@foreach ($comments as $comment)
					<tr>
						<th>{{ $comment->id }}</th>
						<td>{{ $comment->name }}</td>
						<td>{{ substr($comment->body, 0, 50) }}{{ strlen($comment->body) > 50 ? "..." : "" }}</td>
						<td>{{ date('j M, Y', strtotime($comment->created_at)) }}
						</td>
						<td>
							<img src="{{ asset('images/' . $comment->photo)}}" height="50" width="50"/></td>
						</td>
						<td><a href="{{ route('comments.show', $comment->id)}}" class="btn btn-default btn-sm">view</a>
							<a href="{{ route('comments.edit', $comment->id)}}" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $comments->links(); !!}
		</div>
	</div>
</div>
</div>
@endsection