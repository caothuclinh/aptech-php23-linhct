
<!DOCTYPE html>
<html lang="en"><head>
	<title>user -@yield('title') </title>
	<meta charset="utf-8">
	<base href="{{asset('')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="font/vendor/bootstrap.js"></script>
	<script type="text/javascript" src="font/vendor/jquery.js"></script>
	<script type="text/javascript" src="font/vendor/all.js"></script>
 	<script type="text/javascript" src="font/1.js"></script>
	<link rel="stylesheet" href="font/vendor/bootstrap.css">
	<link rel="stylesheet" href="font/vendor/all.css">
 	<link rel="stylesheet" href="font/1.css">
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

</head>
<body class="bg-dark ">

	<div class="container mb-4">
		<div class="row">
			<div class="col">
				<h1 class="text-center">Dự án bài viết bằng laravel</h1>
				<h2><a href="{{ route('articles.restore') }}" class="btn btn-primary">restore</a></h2>
				<h2><a href="{{ route('articles.index') }}">trang chu</a></h2>
				@if(Route::currentRouteName() != 'articles.create')
				<div><a href="{{ route('articles.create') }}" class="btn btn-info">them moi bai viet</a></div>
				@endif
			</div>
		</div>
	</div>
	@section('content')
	@show
	
</div>
</body>
</html>
</html>