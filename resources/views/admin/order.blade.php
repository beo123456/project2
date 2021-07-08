@extends('admin_layout')
@section('title','Đơn Hàng Chưa Xử Lý')
@section('content')

@if(session('messages'))
<div class="text-success">{{ session('messages') }}</div>
@endif
<div><a class="btn btn-outline-primary" href="../../admin/order/processed">Click Để Xem Đơn Hàng Đã Xử Lý</a></div>
<table class="table">
 
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Trạng thái</th>
      </tr>
    </thead>
    <tbody>
        @foreach($order as $key => $value)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['phone'] }}</td>
        <td>{{ $value['address'] }}</td>
        <td><a href="../../admin/order/detail/{{ $value['id'] }}">Chưa Xử Lý</a></td>
      </tr>
      @endforeach


    </tbody>
</table>

@endsection