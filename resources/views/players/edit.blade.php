@extends('base')

@section('main')
<div class="row">
	<div class="">
		<h1>Edit contact</h1>
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="post" action="{{ route('players.update', $player->id) }}">
		@csrf
		@method('PATCH')
		<div class="form-group">
			<label for="FullName">Full Name:</label>
			<input type="text" class="form-control" name="FullName" value="{{ $player->FullName }}"/>
		</div>

		<div class="form-group">
			<label for="UserName">Username:</label>
			<input type="text" class="form-control" name="UserName" value="{{ $player->UserName }}"/>
		</div>

		<button type="submit" class="btn btn-primary">Edit Player</button>
	</form>
</div>
@endsection