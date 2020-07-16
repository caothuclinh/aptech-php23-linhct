@extends('layout.master')
@section('title', 'trang chu')
@section('content')
@if(Session::has('thongbao'))
	<div class="alert alert-success"> {{ Session::get('thongbao') }} </div>
@endif
<div class="row display-3">có tất cả {{ count($articles) }} bài viết</div>
	<?php $i = 0;?>
	

	<div class="container bg-dark">
		<div class="row">
			@foreach($articles as $article)
				<?php $i++;?>
				<div class="col-4">
					<div class="card text-center">
						<div class="card-body">
							<h4 class="card-title">{{ $article->title }}</h4>
							<p style="font-weight: bold;" class=" text-primary">{{ $article->slug }}</p>
							<p class="card-text">{{ $article->description }}</p>
							{{-- <p class="card-text">{{ $article->content }}</p> --}}
						</div>
						<div class="flex-row">
							<table>
								<tr>
									<td>
										<a class="btn btn-info btn-block" href="{{ route('articles.show',$article->id) }}">show</a>
									</td>
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
							</table>
							
							{{-- <a class="btn btn-danger" href="{{ route('articles.edit',$article->id) }}">edit</a> --}}
							
						</div>
					</div>
					
				</div>
				@endforeach
		</div>
		<div class="row">{{ $articles->links() }}</div>
	</div>
@endsection