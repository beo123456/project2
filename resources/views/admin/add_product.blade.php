@extends('admin_layout')
@section('title','Thêm Sản Phẩm')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Thêm Sản Phẩm</h1>            
                </header>
              
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" required class="form-control" name="name" placeholder="Nhập Tên Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" required class="form-control" name="price" placeholder="Nhập Giá Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label>Mô tả sản phẩm</label>
                            <input name="desc" type="text" class="form-control" placeholder="Mô tả Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea style="resize: none" rows="5" name="content" type="text" class="form-control" placeholder="Nội dung"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Danh mục sản phẩm</label>
                            <p>
                            <select name="category_id" class="form-select">
                                @foreach($category as $value)
                                <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                @endforeach
                              </select>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="">Thương hiệu sản phẩm</label>
                            <p>
                            <select name="brand_id" class="form-select">
                                @foreach($brand as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                              </select>
                            </p>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <p>
                            <select name="status" class="form-select">
                                <option value="1">Hiển thị</option>
                                <option value="2">Ẩn</option>
                              </select>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-info">Thêm Sản Phẩm</button>
                    </form>

                    </div>

                </div>
            </section>

    </div>
    @endsection
