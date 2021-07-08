@extends('admin_layout')
@section('title','Chi Tiết Đơn Hàng')
@section('content')
<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">		
									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-blue">
                                                <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Thông Tin Khách Hàng</strong> <br>
												<div class="panel-body">
													<strong>Tên: {{ $order->name }}</strong> <br>
													<strong>Số điện thoại: {{ $order->phone }}</strong>
													<br>
													<strong>Địa Chỉ: {{ $order->address }} </strong>
                                                    <br>
                                                    <strong>Ghi Chú: {{ $order->note }} </strong>
												</div>
											</div>
										</div>
									</div>
	
				</div>
			</div>
		</div>
		<!--/.row-->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Ảnh Sản Phẩm</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Giá</th>
              </tr>
            </thead>
            <tbody>
@foreach($order->ProductOrder as $key => $value)
              <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td><img width="150px" height="100px" src="../../public/backend/images/{{ $value->image }}" alt=""></td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->quantity }}</td>
                <td>{{ number_format($value->quantity*$value->price,0,'','.') }}</td>
              </tr>
@endforeach

            </tbody>
          </table>
          <table class="table">
            <thead>
                <tr>
                    <th width='70%'>
                        <h4 align='right'>Tổng Tiền :</h4>
                    </th>
                    <th>
                        <h4 align='right' style="color: brown;">{{ number_format($order->total,0,',','.') }} VNĐ</h4>
                    </th>                    
                </tr>
            </thead>
        </table>
        <div align='right'>
          <a class="btn btn-success" href="../../admin/order/paid/{{ $order->id }}" role="button">Xử Lý Đơn Hàng</a>
        </div>
	</div>


    
	<!--end main-->




@endsection