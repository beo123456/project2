@extends('admin_layout')
@section('title','Sửa Thông Tin Quản Trị Viên')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Sửa Thông Tin Quản Trị Viên</h1>            
                </header>
  
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" required class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" required class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="text" required class="form-control" name="password">
                        </div>     
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" required class="form-control" name="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <p>
                            <select name="level" class="form-select" aria-label="Default select example">
                                @if($user->level == 1)
                                <option value="1" selected>Admin</option>
                                <option value="2">Manager</option>
                                @else
                                <option value="1">Admin</option>
                                <option value="2" selected>Manager</option>
                                @endif
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