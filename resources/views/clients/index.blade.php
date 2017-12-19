@extends('layouts._master')

@section('content')
<div class=" col-md-12 col-md-offset-0.5">
<div class="row">
	<div class="col-md-12">
		<h1>All clients</h1>
	</div>
</div>
	<br />
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Image</th>
				<th>
					{{ Html::linkRoute('clients.create', 'New client', [], ['class'=> 'btn btn-primary btn-block btn-sm'])}}
				</th>
			</thead>
			<tbody>
			@foreach ($clients as $client)
					<tr>
						<th>{{ $client->id }}</th>
						<td>{{ $client->name }}</td>
						<td>			
							<img src="{{ asset('images/' . $client->logo)}}" height="50" width="100"/></td>
						<td>
						{!! Form::open(['route'=>['clients.destroy', $client->id], 'method'=>'DELETE'])!!}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block btn-sm'])!!}
						{!! Form::close()!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $clients->links(); !!}
		</div>
	</div>
</div>
</div>
@endsection