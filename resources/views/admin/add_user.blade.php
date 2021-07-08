@extends('admin_layout')
@section('title','Thêm Quản Trị Viên')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Thêm Quản Trị Viên</h1>            
                </header>
  
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nhập tên của quản trị viên bạn muốn thêm">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" required class="form-control" name="email" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="text" required class="form-control" name="password" placeholder="Password">
                        </div>     
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" required class="form-control" name="phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <p>
                            <select name="level" class="form-select" aria-label="Default select example">
                                <option value="1">Admin</option>
                                <option value="2">Manager</option>
                              </select>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-info">Thêm thương hiệu</button>
                    </form>

                    </div>

                </div>
            </section>

    </div>

@endsection