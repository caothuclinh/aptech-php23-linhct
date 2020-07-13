@extends('layout.master')
@section('content')
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
										<a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">show</a>
									</td>
									<td>
										<form action="{{ route('articles.delete',$article->id) }}" method= "post">
											@method("DELETE")
											@csrf
											<button class="btn btn-warning" type="submit">delete</button>
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
	</div>
@endsection