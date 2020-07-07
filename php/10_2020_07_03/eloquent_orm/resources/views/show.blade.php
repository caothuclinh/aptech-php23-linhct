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
			<th>Tên</th>
			<th>Email</th>
			<th colspan="2">truy van</th>
		</tr>
		{{-- {{ dd($user) }} --}}
		@foreach ($user as $key)
			<tr>
				{{-- {{ dd($key) }} --}}
				<td>{{ $key->id }}</td>
				<td>{{ $key->name }}</td>
				<td>{{ $key->email }}</td>
				<td><a href="">xem chi tiết</a></td>
				<td> <a href="">xoa</a></td>
			</tr>
		@endforeach
	</table>
</body>
</html>
