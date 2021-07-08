<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Giỏ Hàng</title>
    <base href="{{ asset('public').'/frontend/' }}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	@include('pages/header_frontend')


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="../../">Home</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			@if(session('messages'))
			<div class="btn btn-success">{{ session('messages') }}</div>
			@endif
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ảnh Sản Phẩm</td>
							<td class="description">Tên Sản Phẩm</td>
							<td class="price">Giá Sản Phẩm</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $value)
						<tr>
							<td class="cart_product">
								<img width="100px" height="100px" name="image" src="../../public/backend/images/{{ $value->options->image }}">
							</td>
							<td>
								<h4><a href="../../product_detail/{{ $value->id }}">{{ $value->name }}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{ number_format($value->price,0,',','.') }} vnd</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">

								<form action="{{ route('update_cart',['rowId'=>$value->rowId]) }}" method="post">
									@csrf
									<input min="1" class="cart_quantity_input" type="number" name="quantity" value="{{ $value->qty }}" size="2">
									<input class="cart_quantity_input" type="hidden" name="rowId_cart" value="{{ $value->rowId }}" size="2">
									<input type="submit" value="Cập Nhật" name="update_qty" class="btn btn-default btn-sm" >
									<form
								</div>

							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($value->price*$value->qty,0,'','.') }} vnd</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{ route('delete_cart',['rowId'=>$value->rowId]) }}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="total-wrap">
				<div class="row">
					<div class="col-md-8">

					</div>
					<div class="col-md-3 col-md-push-1 text-center">
						<div class="total">
							<div class="grand-total">
								<p><span><strong>Tổng cộng:</strong></span> <span>{{ $total }} vnd</span></p>
								<a href="../../checkout" class="btn btn-primary">Thanh toán <i
										class="icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
