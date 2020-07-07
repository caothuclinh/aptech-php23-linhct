@extends('admin.viewUser')
{{-- @include('viewUser') --}}
@section('content')
<h1 class=" btn text-left bg-info"><a href="/users/show" class="text-white"> quay lại trang user</a></h1>

<table class="table table-inverse">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>password</th>
					<th>create at</th>
					<th>updated at</th>
					<th colspan="3">Truy vấn</th>
				</tr>
			</thead>
			<tbody>
			@foreach($user as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->pass}}</td>
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
					<td><a href="users/edit/{{$user->id}}" class="btn btn-outline-danger">Edit</a></td>
					<td><form action="users/delete/{{$user->id}}" method="post" onsubmit="return ConfirmDelete( this )">
						@method('DELETE')
						@csrf
						<button class="btn btn-outline-primary"> delete</button></form></td>
				</tr>
				@endforeach
			</tbody>
		</table>
@endsection