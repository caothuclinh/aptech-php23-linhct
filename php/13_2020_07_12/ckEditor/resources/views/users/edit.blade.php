@extends('layout.master')
@section('content')
@component('layout.component.slot')
edit user {{ $user->name }}
@endcomponent
@if(count($errors) > 0)
<div class="alert-danger alert">
	@foreach($errors->all() as $err)
	{{ $err }}
	@endforeach
</div>
@endif
@if(session('thongbao'))
<div class="alert-success alert">
	{{ session('thongbao') }}
</div>
@endif

<form action="{{ route('users.update',$user->id)}}"method= "POST"}>
	@method("PUT")
	@csrf
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">name user:</label>
		<input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="{{ $user->name }}">
	</fieldset>
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputEmail1">Email address:</label>
		<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="{{ $user->email }}">
	</fieldset>
	
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputPassword1">Password:</label>
		<input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Enter password user">
	</fieldset>
	<button type="submit" class="btn btn-primary">Đồng ý sửa</button>
</form>
@endsection