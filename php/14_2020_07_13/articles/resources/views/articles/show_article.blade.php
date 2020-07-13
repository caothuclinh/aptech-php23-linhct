@extends('layout.master')
@section('content')

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
