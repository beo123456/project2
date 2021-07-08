@extends('admin_layout')
@section('title','Đơn Hàng Đã Xử Lý')
@section('content')

<div><a class="btn btn-outline-primary" href="../../admin/order">Click Để Xem Đơn Hàng Chưa Xử Lý</a></div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Ghi Chú</th>
        <th scope="col">Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order as $key => $value)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $value->name }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->address }}</td>
        <td>{{ $value->content }}</td>
        <td>Đã Xử Lý</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection