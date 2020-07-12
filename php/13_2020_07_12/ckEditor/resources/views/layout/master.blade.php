<!DOCTYPE html>
<html lang="en"><head>
	<title> view users </title>
	<meta charset="utf-8">
	<base href="{{ asset('') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<base href="">
	<script type="text/javascript" src="resouce/vendor/bootstrap.js"></script>
	<script type="text/javascript" src="resouce/vendor/jquery.js"></script>
	<script type="text/javascript" src="resouce/vendor/all.js"></script>
 	<script type="text/javascript" src="resouce/1.js"></script>
	<link rel="stylesheet" href="resouce/vendor/bootstrap.css">
	<link rel="stylesheet" href="resouce/vendor/all.css">
 	<link rel="stylesheet" href="resouce/1.css">
 	<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
</head>
<body class="bg-dark">
	@include('layout.header')
	{{-- end header --}}
	@section('content')
	@show
	{{-- content --}}
	{{-- @if((Route::currentRouteName() != 'users.edit') && Route::currentRouteName() != 'users.create') --}}
	@include('layout.footer')
	{{-- @endif --}}

</body>
</html>
</html>