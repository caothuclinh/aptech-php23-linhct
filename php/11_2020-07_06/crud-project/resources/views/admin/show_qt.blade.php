@extends('admin.viewUser')
{{-- @include('viewUser') --}}
@section('content')
<div class="flex-row">
	<a class="text-secondary" href="{{ asset('') }}users/show">danh sách tất cả người dùng</a>
<a class="btn btn-info text-white" href="users/nhanvien">Nhân Viên</a>
<a class="btn btn-info text-white" href="users/quantri">Quản Trị Viên</a></div>

@if(session('section'))

<div class="alert-success alert">
	{{ session('section') }}
</div>
@endif
{{-- {{ $page }} --}}

<table class="table table-inverse">
	<thead>
		<tr>
			<th>stt</th>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th colspan="3">Truy vấn</th>
		</tr>
	</thead>
	<tbody>
		<?php $i= 0; ?>
		@foreach($users as $user)
		<?php $i++; ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td><a href="users/{{$user->id}}/show?" class="btn btn-outline-info">Show</a></td>
			<td><a href="users/edit/{{$user->id}}" class="btn btn-outline-danger">Edit</a></td>
			<td><form action="users/delete/{{$user->id}}" method="post" onsubmit="return ConfirmDelete( this )">
				@method('DELETE')
				@csrf
				<button class="btn btn-outline-primary"> delete</button></form></td>
		</tr>
		@endforeach

	</tbody>
</table>
<div class=" ml-3 row">{{ $users->links() }}</div>
		<div>
		<button class="btn btn-block btn-info text-xs-center mb-5 pt-3 pb-3 display-2"> <a href="users/create" class="text-white">THÊM NGƯỜI DÙNG MỚI</a></button>
	</div>
@endsection