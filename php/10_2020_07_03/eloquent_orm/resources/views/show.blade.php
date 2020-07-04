<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user</title>
</head>
<body>

	<table border="1">
		<tr>
	@foreach ($user as $key => $value) @endforeach
		@foreach ($value as $key1 => $value1)
			<th><?=$key1?></th>
		@endforeach
		</tr>
		@foreach ($user as $key => $value)
			<tr>
			@foreach ($value as $key1 =>$value1)
				<td><?=$value1?></td>
			@endforeach
			</tr>
		@endforeach
	</table>
</body>
</html>
