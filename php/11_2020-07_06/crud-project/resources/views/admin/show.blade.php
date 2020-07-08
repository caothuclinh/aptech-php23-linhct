@extends('admin.viewUser')
{{-- @include('viewUser') --}}
@section('content')
<h1>danh sách tất cả người dùng</h1>
@if(session('section'))

<div class="alert-success alert">
	{{ session('section') }}
</div>
@endif
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
		<div>
		<button class="btn btn-block btn-info text-xs-center mb-5 pt-3 pb-3 display-2"> <a href="users/create" class="text-white">THÊM NGƯỜI DÙNG MỚI</a></button>
	</div>
@endsection