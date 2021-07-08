@extends('admin_layout')
@section('title','Thêm Thương Hiệu')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Thêm Thương Hiệu Sản Phẩm</h1>            
                </header>
                @if(session('messages'))
                <div class="text-success">{{ session('messages') }}</div>
                @endif
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên thương hiệu</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nhập tên thương hiệu">
                        </div>
                        <div class="form-group">
                            <label>Mô tả thương hiệu</label>
                            <textarea style="resize: none" rows="5" name="desc" type="text" class="form-control" placeholder="Mô tả thương hiệu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <p>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="1">Hiển thị</option>
                                <option value="2">Ẩn</option>
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
