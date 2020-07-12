@extends('layout.master')
@section('content')
@component('layout.component.slot')
tất cả bài viết
@endcomponent
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container blogs">
	<div class="row"> <div class="col text-info">có tất cả {{ count($blogs) }} bài viết</div></div>
	@foreach($blogs as $blog)
	<div class="row ">
		<div class="col">
			<p>id bài viết: {{ $blog->id }}</p>
			<h2>{{ $blog->tieude }}</h2>
			<p>{{ $blog->mota_ngan }}</p>
		</div>
	</div>
	<div class="row">
		<div class="col flex-column">
			<table class="table table-inverse">
				<tbody>
					<tr>
						<td><button class="btn btn-info btn-block"><a href="{{ route('blogs.show',$blog->id) }}" class="text-white">blog detail</a></button></td>
						<td><button class="btn btn-danger btn-block"><a href="{{ route('blogs.edit',$blog->id) }}"class="text-white">edit blog</a></button></td>
						<td><form action="{{ route('blogs.delete',$blog->id) }}" method="post">
							@method('DELETE')
							@csrf
							<button class="btn btn-warning btn-block text-white" type="submit">delete blog</button>
						</form></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	@endforeach
	<div class="roư">{{ $blogs->links() }}</div>
</div>
</div>
<div class="container">
	<div class="row"><div class="col"><button class="btn btn-outline-warning"><a href="{{ route('blogs.create') }}" class="text-white">thêm mới blogs</a></button></div>
	</div>
</div>
@endsection