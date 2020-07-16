@extends('layout.master')
@section('title', 'trang chu')
@section('content')
@if(Session::has('thongbao'))
	<div class="alert alert-success"> {{ Session::get('thongbao') }} </div>
@endif
{{-- <div class="row display-3">có tất cả {{ count($articles) }} bài viết</div> --}}
	<?php $i = 0;?>
	

	<div class="container bg-dark">
		<div class="row">
			@foreach($articles as $article)
				<?php $i++;?>
				<div class="col-4">
					<div class="card text-center">
						<div class="card-body">
							<h3>bài số {{ $i }}</h3>
							<p>id bài viết: {{ $article->id }}</p>
							<h4 class="card-title">{{ $article->title }}</h4>
							<p style="font-weight: bold;" class=" text-primary">{{ $article->slug }}</p>
							<p class="card-text">{{ $article->description }}</p>
							{{-- <p class="card-text">{{ $article->content }}</p> --}}
						</div>
						<div class="flex-row">
							<table>
								<tr>
									<td>
										<form action="{{ route('articles.stored_at',$article->id) }}" method="post">
											@method('POST')
											@csrf
											<button type="submit" class="btn btn-info">store</button>
										</form>
									</td>
								</tr>
							</table>
							
							
						</div>
					</div>
					
				</div>
				@endforeach

		</div>
	</div>
@endsection