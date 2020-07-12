@extends('layout.master')
@section('content')
@component('layout.component.slot')
chi tiết người dùng
@endcomponent
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-12">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>password</th>
						<th>created at</th>
						<th>updated at</th>
						<th colspan="3">truy vấn</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->pass }}</td>
							<td>{{ $user->created_at }}</td>
							<td>{{ $user->updated_at }}</td>
							<td><a href="{{ route('users.edit',$user->id) }}" class="btn btn-danger">edit</a></td>
							<td><a href="" class="btn btn-warning">delete</a></td>
						</tr>

				</tbody>
			</table>
		</div>
	</div>
<div class="container">
</div>
	<div class="row"><div class="col"><button class="btn btn-outline-warning"><a href="{{ route('users.create') }}" class="text-white">thêm mới user</a></button></div></div>
	</div>
</div>
@endsection
