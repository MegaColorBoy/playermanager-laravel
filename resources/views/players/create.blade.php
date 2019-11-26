@extends('base')

@section('main')
<div class="row">
	<div class="col-12">
		<h1>Add a contact</h1>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="post" action="{{ route('players.store') }}">
			@csrf
			<div class="form-group">
				<label for="FullName">Full Name:</label>
				<input type="text" class="form-control" name="FullName" placeholder="Enter full name" />
			</div>

			<div class="form-group">
				<label for="UserName">Username:</label>
				<input type="text" class="form-control" name="UserName" placeholder="Enter user name" />
			</div>

			<button type="submit" class="btn btn-primary">Add Player</button>
		</form>
	</div>
</div>
@endsection