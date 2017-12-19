@if (Session::has('Success'))

	<div class="alert alert-success col-md-8 col-md-offset-2" role="alert">
		<strong>Success:</strong> {{ Session::get('Success') }}
	</div>

@endif

@if (count($errors) > 0)

<div class="alert alert-danger col-md-8 col-md-offset-2" role="alert" >
	<strong>Errors:</strong>
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach	
	</ul>
</div>

@endif