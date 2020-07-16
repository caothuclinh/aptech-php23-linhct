@extends('layout.master')

@section('content')
<table class="table table-inverse">
	
	<tbody>
		<tr>
			<td>
				<a href="{{ route('articles.edit',$article->id) }}" class="btn btn-danger btn-block">edit</a>
			</td>
			<td>
				<form action="{{ route('articles.delete',$article->id) }}" method= "post">
					@method("DELETE")
					@csrf
					<button class="btn btn-warning btn-block" type="submit">delete</button>
				</form>
			</td>
		</tr>
	</tbody>
</table>
<div class="container article text-white">
	<div class="row ">
		<div class="col">
			<p>id bài viết: {{ $article->id }}</p>
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->slug }}</p>
			<div class="container text-white">
				<div class="row">
					<div class="col">
						{{ $article->descrpition }}
					</div>
				</div>
				<div class="row">
					<div class="col">
						{!!  $article->content !!}
					</div>
				</div>
			</div>
			<p>ngày tạo: {{ $article->created_at }}</p>
			<p> ngày sửa: {{ $article->updated_at }}</p>
		</div>
	</div>
	
</div>
@endsection
