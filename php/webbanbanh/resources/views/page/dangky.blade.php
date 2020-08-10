@extends('layout.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			@if(count($errors) > 0)
					@foreach($errors->all() as $err)
					<div class="alert alert-danger text-center">
						<p>{{ $err }}</p>
					</div>
					@endforeach
			@endif
			@if(Session('thongbao'))
			<div class="alert alert-success">{{ Session('thongbao') }}</div>
			<div class="btn btn-info"><a href="{{ route('login') }}">Đăng nhập ngay</a></div>
			@endif
		</div>
		<div id="content">
			
			<form action="{{ route('signup') }}" method="post" class="beta-form-checkout">
				@method('post')
				@csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" id="your_last_name" name="fullname" required>
						</div>

						<div class="form-block">
							<label for="address">Address*</label>
							<input type="text" name="address" id="address" value="Street Address" required>
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" id="phone" required>
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input type="text" name="password" id="password" required>
						</div>
						<div class="form-block">
							<label for="re_password">Re password*</label>
							<input type="text" name="re_password" id="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection