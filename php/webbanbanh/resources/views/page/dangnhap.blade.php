@extends('layout.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			@if(count($errors) >0)
			 @foreach($errors->all() as $err)
			 <div class="alert alert-danger">
			 	{{ $err }}
			 </div>
			 @endforeach
			@endif
			@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('flag') }}">
				{{ Session::get('message') }}
			</div>
			@endif
		</div>
		<div id="content">
			
			<form action="{{ route('singin') }}" method="post" class="beta-form-checkout">
				@method('post')
				@csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" required>
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" id="password" name="password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection