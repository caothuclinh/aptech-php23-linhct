@extends('layout.master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			{{-- {{ dd($product_cart) }} --}}
			
			<form action="{{ route('dathang') }}" method="post" class="beta-form-checkout">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						@if(session('thongbao'))
						<div class="alert alert-success">{{ session('thongbao') }}</div>
						@endif
						@if(Session::has('cart'))
						<div class="space20">&nbsp;</div>
						@if(Auth::check())
							<div class="form-block">
								<label for="name">Họ tên*</label>
								<input type="text" id="name" name="name" value="{{ Auth::user()->full_name }}" placeholder="Họ tên" required>
							</div>
							<div class="form-block">
								<label for="gender">Giới tính </label>
								<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
								<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
											
							</div>

							<div class="form-block">
								<label for="email">Email*</label>
								<input type="email" id="email" name="email" value="{{ Auth::user()->email }}" required placeholder="expample@gmail.com">
							</div>

							<div class="form-block">
								<label for="adress">Địa chỉ*</label>
								<input type="text" id="adress" name="adress" value="{{ Auth::user()->address }}" placeholder="Street Address" required>
							</div>
							

							<div class="form-block">
								<label for="phone">Điện thoại*</label>
								<input type="text" id="phone" name="phone_number" value="{{ Auth::user()->phone }}" required>
							</div>
						@else
							<div class="form-block">
								<label for="name">Họ tên*</label>
								<input type="text" id="name" name="name"  placeholder="Họ tên" required>
							</div>
							<div class="form-block">
								<label for="gender">Giới tính </label>
								<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
								<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
											
							</div>

							<div class="form-block">
								<label for="email">Email*</label>
								<input type="email" id="email" name="email" required placeholder="expample@gmail.com">
							</div>

							<div class="form-block">
								<label for="adress">Địa chỉ*</label>
								<input type="text" id="adress" name="adress"  placeholder="Street Address" required>
							</div>
							

							<div class="form-block">
								<label for="phone">Điện thoại*</label>
								<input type="text" id="phone" name="phone_number"  required>
							</div>
						@endif
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" name="note"></textarea>
						</div>
						@endif
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							@if(Session::has('cart'))
							@foreach($product_cart as $product)
								<table>
									<tr>
										<td>
											<div style="margin-right: 20px" class="float-left"><img  height="230" width="300"  src="btr/image/product/{{ $product['item']['image']}}" alt=""></div>
										</td>
										<td>
											<div class="media-body">
											<span class="cart-item-title">{{ $product['item']['name'] }}</span>
											<div>
												<span class="cart-item-amount">đơn giá: <span>@if($product['item']['promotion_price'] ==0){{ number_format($product['item']['unit_price']) }} @else {{ number_format($product['item']['promotion_price']) }} @endif VNĐ</span></span>
											</div>
											<div>
												số lượng <span>{{ $product['qty']}}</span>
											</div>
									</div>
										</td>
									</tr>
								</table>
							@endforeach
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left">
											<div class="media-body">
												
											</div>
										</div>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black"><span class="cart-total-value">{{ number_format(Session('cart')->totalPrice) }} VNĐ</span></h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
							@else
							{{ 'không có đơn hàng nào cả' }}
							@endif
						</div> <!-- .your-order -->


					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection