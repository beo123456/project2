@extends('admin_layout')
@section('title','Thêm Banner')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Thêm Banner</h1>            
                </header>
                @if(session('messages'))
                <div class="text-success">{{ session('messages') }}</div>
                @endif
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label>Tên Banner</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nhập tên banner">
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh</label>
                            <input type="file" required class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea style="resize: none" rows="5" name="desc" type="text" class="form-control" placeholder="Mô tả banner"></textarea>
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
                        <button type="submit" class="btn btn-info">Thêm Banner</button>
                    </form>

                    </div>

                </div>
            </section>

    </div>
    @endsection
