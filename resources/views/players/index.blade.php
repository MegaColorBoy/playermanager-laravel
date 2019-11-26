@extends('base')

@section('main')
<div class="row">
	<div class="col-12">
		<h3>Players List</h3>
		<p>This application is built on Laravel PHP.</p>
		@if(session()->get('success'))
			<div class="alert alert-success">
				{{ session()->get('success') }}
			</div>
		@endif
		<div style="margin-bottom: 30px;">
			<a class="btn btn-md btn-primary" href="{{ route('players.create') }}">Add player</a>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Full Name</th>
					<th scope="col">User Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($players as $player)
				<tr>
					<td>{{ $player->id }}</td>
					<td>{{ $player->FullName }}</td>
					<td>{{ $player->UserName }}</td>
					<td>
						<a href="{{ route('players.edit', $player->id) }}" class="btn btn-sm btn-primary">Edit</a>
						<form style="display: inline-block;" action="{{ route('players.destroy', $player->id) }}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Delete</a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection