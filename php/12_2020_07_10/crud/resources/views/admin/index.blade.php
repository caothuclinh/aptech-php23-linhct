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
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td><a href="{{ asset('') }}users/show/{{ $user->id }}">show</a></td>
					<td><form action="{{ asset('') }}users/delete/{{ $user->id }}" method="post">
						@method('POST')
						@csrf
						<button type="submit">delete</button>
					</form></td>
					<td><a href="{{ asset('') }}users/edit/{{ $user->id }}">edit</a></td>
				</tr>
			@endforeach
	</table>
	<button><a href="{{ asset('') }}users/create">them moi</a></button>
</body>
</html>