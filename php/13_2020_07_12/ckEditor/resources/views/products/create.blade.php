@extends('layout.master')
@section('content')
@component('layout.component.slot')
thêm mới bài viết
@endcomponent
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

<form action="{{ route('blogs.store')}}"method= "POST"}>
	@method("PATCH")
	@csrf
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">tiêu đề bài viết:</label>
		<input type="text" class="form-control" name="tieude" id="exampleInputName1" placeholder="nhập tiêu đề bài viết">
	</fieldset>
	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">mô tả ngắn:</label>
		<input type="text" class="form-control" name="mota" id="exampleInputName1" placeholder="nhập mô tả ngắn của bài viết">
	</fieldset>

	<fieldset class="form-group">
		<label class="text-white" for="exampleInputName1">nội dung bài viết:</label>
		<textarea id="editor" name="noidung">nhập nội dung bài viết</textarea>
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
@endsection