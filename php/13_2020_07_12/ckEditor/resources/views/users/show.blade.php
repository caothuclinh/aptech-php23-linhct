@extends('layout.master')
@section('content')
@component('layout.component.slot')
tất cả người dùng
@endcomponent
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>STT</th>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th colspan="3">truy vấn</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0;?>
					@foreach($users as $user)
					<?php $i++;?>
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td><a href="{{ route('users.show',$user->id) }}" class="btn btn-info">show</a></td>
						<td><a href="{{ route('users.edit',$user->id) }}" class="btn btn-danger">edit</a></td>
						<td><form action="{{ route('users.delete',$user->id) }}" method="post">
							@method('DELETE')
							@csrf
							<button type="submit" class="btn btn-warning">delete</button>
						</form></td>
					</tr>
					@endforeach

				</tbody>
			</table>
			<div class="row">{{ $users->links() }}</div>
		</div>
	</div>
</div>
<div class="container">
<div class="row"><div class="col"><button class="btn btn-outline-warning"><a href="{{ route('users.create') }}" class="text-white">thêm mới user</a></button></div></div>
</div>
@endsection