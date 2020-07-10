@extends('admin.viewUser')
@section('content')
@foreach( $user as $user)
@if($user->cap_bac == 'qt')
<h1 class=" btn text-left bg-info"><a href="{{ asset('') }}users/quantri" class="text-white"> quay lại trang user</a></h1>
@else
<h1 class=" btn text-left bg-info"><a href="{{ asset('') }}users/show" class="text-white"> quay lại trang user</a></h1>
@endif

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

<h2 class="text-info">{{ $user->name }}</h2>
<form action="users/update/{{ $user->id }}" method="post">
	@method('PATCH')
	@csrf
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset class="form-group">
		<label for="exampleInputEmail1">name:</label>
		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ $user->name }}" name="name">
		<label for="exampleInputEmail1">emai:</label>
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ $user->email }}" name="email">
		<label for="exampleInputEmail1">password:</label>
		<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="pass">
	<div class="">
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
@endforeach
@endsection