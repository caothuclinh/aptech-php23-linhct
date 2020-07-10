<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
</head>
<body>
	@foreach($user as $us)
	<form action="{{ asset('') }}users/update/{{ $us->id }}" method ="post">
		@method('POST')
		@csrf
		<div>ten: <input type="text" name="ten" value="{{ $us->name }}"></div>
		<div>email: <input type="email" name="email" value="{{ $us->email }}"></div>
		<div>pass: <input type="password" name="pass" value="{{ $us->pass }}"></div>
		<button type="submit"> gui</button>
	</form>
	@endforeach
</body>
</html>