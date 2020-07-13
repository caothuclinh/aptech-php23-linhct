<!DOCTYPE html>
<html lang="en"><head>
	<title> sua bai viet </title>
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
</head>
<body class="bg-dark">
	<h2><a href="{{ route('articles.index') }}">trang chu</a></h2>
@if(count($errors) > 0)
<div class="alert-danger alert">
	@foreach($errors->all() as $err)
	{{ $err }}
	@endforeach
</div>
@endif
@if(session('thongbao'))
<div class="alert-success alert">
	{{ session('thongbao') }}
</div>
@endif
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<form action="{{ route('articles.store')}}"method= "POST"}>
	@method("PATCH")
	@csrf
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">title:</label>
		<input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="nhập tiêu đề bài viết">
	</fieldset>
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">mô tả ngắn:</label>
		<input type="text" class="form-control" name="description" id="exampleInputName1" placeholder="nhập mô tả ngắn của bài viết">
	</fieldset>

	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">nội dung bài viết:</label>
		<textarea id="editor" name="content">nhập nội dung bài viết</textarea>
	</fieldset>
	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
	
	<button type="submit" class="btn btn-primary">Đồng ý thêm mới</button>
</form>
</body>
</html>