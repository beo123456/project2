@extends('layout')
@section('title_frontend','Tìm Kiếm Sản Phẩm')
@section('content_frontend')
<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Kết Quả Tìm Kiếm</h2>
        @foreach($search_product as $value)
        <a href="../../product_detail/{{ $value['id'] }}">
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img width="300px" height="300px" src="../../public/backend/images/{{ $value['image'] }}">
                            <h2>{{ number_format($value['price'],0,',','.') }} vnd</h2>
                            <p>{{ $value['name'] }}</p>
                            <form action="../../cart/add" method="get">
                                <input name="product_id" type="hidden" value="{{ $value['id'] }}"/>
                                <input name="qty" type="hidden" value="1"/>
                                <button type="submit">Thêm Giỏ Hàng</button>
                            </form>

                            <a href="../../product_detail/{{ $value['id'] }}" class="btn btn-default add-to-cart">Xem chi tiết</a>
                        </div>
          
                </div>
            </div>
        </div>
    </a>
        @endforeach
    </div>
     
</div>

@endsection