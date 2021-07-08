@extends('admin_layout')
@section('title','Sửa Thương Hiệu')
@section('content')
<div class="row">
    <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
    <h1>   Sửa thương hiệu Sản Phẩm </h1>            
                </header>
              
                <div class="panel-body">
                    <div class="position-center">

                        <form role="form" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Tên thương hiệu</label>
                            <input value="{{ $brand['name'] }}" type="text" class="form-control" name="name" placeholder="Nhập tên thương hiệuc">
                        </div>
                        <div class="form-group">
                            <label>Mô tả thương hiệu</label>
                            <textarea style="resize: none" rows="5" name="desc" type="text" class="form-control">{{ $brand['desc'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <p>
                            <select name="status" class="form-select" aria-label="Default select example">
                                @if($brand['status'] == 1)
                                <option value="1" selected >Hiển thị</option>
                                <option value="2" >Ẩn</option>
                                @else
                                <option value="1" >Hiển thị</option>
                                <option value="2" selected >Ẩn</option>
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
