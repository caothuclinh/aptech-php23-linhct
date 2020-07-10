<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
</head>
<body>@foreach( $user as $us)
	@endforeach
	<form action="{{ asset('') }}users/store" method ="post">
		@method('POST')
		@csrf
		<div>ten: <input type="text" name="ten" value=""></div>
		<div>email: <input type="email" name="email" value=""></div>
		<div>pass: <input type="password" name="pass" value=""></div>
		<button type="submit"> gui</button>
	</form>

</body>
</html>