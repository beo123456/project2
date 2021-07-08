@extends('admin_layout')
@section('title','Thêm Danh Mục Sản Phẩm')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Thêm Danh Mục Sản Phẩm </h1>            
                </header>
                @if(session('messages'))
                <div class="text-success">{{ session('messages') }}</div>
                @endif
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label>Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" name="desc" type="text" class="form-control" placeholder="Mô tả danh mục"></textarea>
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
                        <button type="submit" class="btn btn-info">Thêm danh mục</button>
                    </form>

                    </div>

                </div>
            </section>

    </div>
    @endsection
