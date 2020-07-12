@extends('layout.master')
@section('content')
@component('layout.component.slot')
thêm mới người dùng
@endcomponent
@if(count($errors) > 0)
<div class="alert alert-warning">
	@foreach($errors->all() as $err)
		{{ $err }}
	@endforeach
</div>
@endif
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-12">
			<form action="{{ route('users.store') }}" method="post">
				@method('PATCH')
				@csrf
				<fieldset class="form-group">
					<label for="exampleInputName1">name:</label>
					<input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Enter name ">
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleInputEmail1">email:</label>
					<input type="email" class="form-control" name="email" id="exampleInputName1" placeholder="Enter email ">
				</fieldset>
				<fieldset class="form-group">
					<label for="exampleInputPassword1">name:</label>
					<input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Enter password ">
				</fieldset>
				
				<button type="submit" class="btn btn-primary">Thêm mới người dùng</button>
			</form>
		</div>
	</div>
</div>
@endsection
