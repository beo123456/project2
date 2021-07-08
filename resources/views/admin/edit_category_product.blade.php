@extends('admin_layout')
@section('title','Sửa Danh Mục Sản Phẩm')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Sửa Danh Mục Sản Phẩm </h1>            
                </header>
              
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input value="{{ $category['name'] }}" type="text" class="form-control" name="name" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label>Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" name="desc" type="text" class="form-control">{{$category['desc']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <p>
                            <select name="status" class="form-select" aria-label="Default select example">
                                @if($category['status'] == 1)
                                <option value="1" selected >Hiển thị</option>
                                <option value="2">Ẩn</option>
                                @else
                                <option value="2" selected >Ẩn</option>
                                <option value="1" selected >Hiển thị</option>
                                @endif
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
