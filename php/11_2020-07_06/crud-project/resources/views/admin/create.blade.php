@extends('admin.viewUser')
@section('content')
<h1 class=" btn text-left bg-info"><a href="/users/show" class="text-white"> quay lại trang user</a></h1>
@if(count($errors) > 0)
    <div class="alert-danger alert">
        @foreach($errors->all() as $err)
        {{ $err }}<br>
        @endforeach
    </div>
@endif
@if(session('section'))
    <div class="alert-success alert">
        {{ session('section') }}
    </div>
@endif
<form action="users/store" method="post">
	@method('PATCH')
	@csrf
	<fieldset class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="exampleInputEmail1">name</label>
		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
		<label for="exampleInputEmail1">Email address</label>
		<input class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
		<label for="exampleInputEmail1">password</label>
		<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="pass">
		
	</fieldset>
	
	<div class="">
		
	<button type="submit" class="btn btn-primary">đồng ý thêm</button>
	</div>
</form>
@endsection