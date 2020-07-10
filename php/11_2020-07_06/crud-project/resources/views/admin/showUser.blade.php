@extends('admin.viewUser')
{{-- @include('viewUser') --}}
@section('content')
@foreach($user as $user)
@endforeach

@if($user->cap_bac == 'qt')
<h1 class=" btn text-left bg-info"><a href="{{ asset('') }}users/quantri" class="text-white"> quay lại trang user</a></h1>
@else
<h1 class=" btn text-left bg-info"><a href="{{ asset('') }}users/show" class="text-white"> quay lại trang user</a></h1>
@endif

<table class="table table-inverse">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>password</th>
					<th>trức vụ</th>
					<th>create at</th>
					<th>updated at</th>
					<th colspan="3">Truy vấn</th>
				</tr>
			</thead>
			<tbody>
			
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->pass}}</td>
					@if($user->cap_bac == 'qt')
					<td>Quản Trị</td>
					@elseif($user->cap_bac != 'qt')
					<td>Nhân Viên</td>
					@endif
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
					<td><a href="users/edit/{{$user->id}}" class="btn btn-outline-danger">Edit</a></td>
					<td><form action="users/delete/{{$user->id}}" method="post" onsubmit="return ConfirmDelete( this )">
						@method('DELETE')
						@csrf
						<button class="btn btn-outline-primary"> delete</button></form></td>
				</tr>
			</tbody>
		</table>
@endsection