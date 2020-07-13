@extends('layout.master')
@section('content')
@component('layout.component.slot')
tất cả sản phẩm
@endcomponent
@if(session('thongbao'))
<div class="alert alert-success">{{ session('thongbao') }}</div>
@endif
<div class="container products">
	<div class="row"> <div class="col text-info">có tất cả {{ count($products) }} sản phẩm</div></div>
	
	
</div>
</div>
<div class="container">
	<div class="row"><div class="col"><button class="btn btn-outline-warning"><a href="{{ route('products.create') }}" class="text-white">thêm mới sản phẩm</a></button></div>
	</div>
</div>
@endsection