@extends('admin_layout')
@section('title','Sửa Sản Phẩm')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Sửa Sản Phẩm</h1>            
                </header>
              
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" required class="form-control" name="name" value="{{ $product->name }}" >
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" required class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label>Mô tả sản phẩm</label>
                            <input name="desc" type="text" class="form-control" value="{{ $product->desc }}">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea style="resize: none" rows="5" name="content" type="text" class="form-control">{{ $product->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>

                            <input type="file" name="image" onchange="changeImg(this)">
                        <img width="250" height="250" src="../backend/images/{{ $product->image }}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Danh mục sản phẩm</label>
                            <p>
                            <select name="category_id" class="form-select">
                                @foreach($category as $value)
                                @if($value['id'] == $product->category_id ) <?php /// nếu id của category == category_id của product thì lected không thì giữ nguyên  ?>
                                <option value="{{ $value['id'] }}" selected>{{ $value['name'] }}</option>
                                @else
                                <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                @endif
                                @endforeach
                              </select>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="">Thương hiệu sản phẩm</label>
                            <p>
                            <select name="brand_id" class="form-select">
                                @foreach($brand as $value2)
                                @if($value2['id'] == $product['brand_id'])
                                <option value="{{ $value2['id'] }}" selected>{{ $value2['name'] }}</option>
                                @else
                                <option value="{{ $value2['id'] }}">{{ $value2['name'] }}</option>
                                @endif
                                @endforeach
                              </select>
                            </p>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <p>
                            <select name="status" class="form-select">
                                @if($product['status'] == 1)
                                <option selected value="1">Hiển thị</option>
                                @else
                                <option value="2">Ẩn</option>
                                @endif
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
