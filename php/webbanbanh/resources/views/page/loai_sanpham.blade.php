@extends('layout\master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm {{ $loai_sp->name }}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{ route('trang-chu') }}">Home</a> / <span>loại Sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						@foreach($loai as $l)
						<li><a href="{{ route('loaisanpham',$l->id) }}">{{ $l->name }}</a></li>
						@endforeach
						
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Sản phẩm {{ $loai_sp->name }}</h4>
						<div class="beta-products-details">
							<p class="pull-left">tìm thấy {{ count($sp_theoloai) }} sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($sp_theoloai as $sanpham)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										@if($sanpham->promotion_price != 0)
											<div class="ribbon-wrapper">
												<div class="ribbon sale">Sale</div>
											</div>
											@endif
										<a href="{{ route('chitietsanpham',$sanpham->id) }}"><img src="btr/image/product/{{ $sanpham->image }}" alt="" height="200"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $sanpham->name }}</p>
										<p class="single-item-price" style ="font-size: 18px;">
											@if($sanpham->promotion_price != 0)
											<span class="flash-del">{{ number_format($sanpham->unit_price)}} VNĐ</span>
											<span class="flash-sale">{{ number_format($sanpham->promotion_price)}} VNĐ</span>
											@else
											<span class="flash-sale">{{ number_format($sanpham->unit_price)}} VNĐ</span>
											@endif

										</p>
									</div>
									<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('themvaogiohang',$sanpham->id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('chitietsanpham',$sanpham->id) }}">chi tiet <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">tìm thấy {{ count($sp_khac) }} sản phẩm khác</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($sp_khac as $sp_k)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{ route('chitietsanpham',$sp_k->id) }}"><img src="btr/image/product/{{ $sp_k->image }}" alt="" height="200"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $sp_k->name }}</p>
										<p class="single-item-price" style ="font-size: 18px;">
											@if($sanpham->promotion_price != 0)
											<span class="flash-del">{{ number_format($sp_k->unit_price)}} VNĐ</span>
											<span class="flash-sale">{{ number_format($sp_k->promotion_price)}} VNĐ</span>
											@else
											<span class="flash-sale">{{ number_format($sanpham->unit_price)}} VNĐ</span>
											@endif

										</p>
									</div>
									<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ route('themvaogiohang',$sp_k->id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ route('chitietsanpham',$sp_k->id) }}">chi tiet <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
							@endforeach
							<div class="row">{{ $sp_khac->links() }}</div>
						</div>
						<div class="space40">&nbsp;</div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection
