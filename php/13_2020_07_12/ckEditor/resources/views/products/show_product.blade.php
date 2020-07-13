@extends('layout.master')
@section('content')
@component('layout.component.slot')
chi tiết bài viết
@endcomponent
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container blogs">
	<div class="row ">
		<div class="col">
			<p>id bài viết: {{ $blog->id }}</p>
			<h2>{{ $blog->tieude }}</h2>
			<p>{{ $blog->mota_ngan }}</p>
			<div class="container text-white">
				<div class="row">
					<div class="col">
						{!!  $blog->noidung !!}
					</div>
				</div>
			</div>
			<p>ngày tạo: {{ $blog->created_at }}</p>
			<p> ngày sửa: {{ $blog->updated_at }}</p>
		</div>
	</div>
	<div class="row">
		<div class="col flex-column">
			<table class="table table-inverse">
				<tbody>
					<tr>
						<td><button class="btn btn-danger btn-block"><a href="{{ route('blogs.edit',$blog->id) }}"class="text-white">edit blog</a></button></td>
						<td><form action="" method="post">
							<button class="btn btn-warning btn-block text-white" type="submit">delete blog</button>
						</form></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="container">
	<div class="row"><div class="col"><button class="btn btn-outline-warning"><a href="{{ route('blogs.create') }}" class="text-white">thêm mới blogs</a></button></div>
	</div>
</div>
@endsection
