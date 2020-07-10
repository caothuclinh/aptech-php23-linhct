<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th colspan="3">truy van</th>
		</tr>
			@foreach($user as $us)
				<tr>
					<td>{{ $us->id }}</td>
					<td>{{ $us->name }}</td>
					<td>{{ $us->email }}</td>				
					<td><a href="">edit</a></td>
					<td><a href="">delete</a></td>
				</tr>
			@endforeach
	</table>
</body>
</html>