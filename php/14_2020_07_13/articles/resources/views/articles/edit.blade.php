@extends('layout.master')
@section('content')
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

<form action="{{ route('articles.update',$article->id)}}"method= "POST"}>
	@method("PUT")
	@csrf
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">tiêu đề bài viết:</label>
		<input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="{{ $article->title }}">
	</fieldset>
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">mô tả ngắn:</label>
		<input type="text" class="form-control" name="description" id="exampleInputName1" placeholder="{{ $article->description }}">
	</fieldset>

	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">nội dung bài viết:</label>
		<textarea id="editor" name="content">{{ $article->content }}</textarea>
	</fieldset>
	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
	
	<button type="submit" class="btn btn-primary">Đồng ý sửa</button>
</form>
@endsection