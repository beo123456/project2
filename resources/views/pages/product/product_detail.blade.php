@extends('layout')
@section('title_frontend','Chi Tiết Sản Phẩm')
@section('content_frontend')
<div class="col-sm-9 padding-right">
    <div class="col-sm-9 padding-right">
        @foreach($product as $value)
        
        <form action="../../cart/add" method="get">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="../../public/backend/images/{{ $value['image'] }}" alt="" />
                </div>
            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2 style="mr:2">{{ $value['name'] }}</h2>

                    <span>
                        <span style="mr:2">{{ number_format($value['price'],0,',','.') }} vnd</span>
                        <label>Số lượng:</label>
                        <input name="qty" type="number" min="1" value="1"/>
                        <input name="product_id" type="hidden" value="{{ $value['id'] }}"/>
                        <button style="mr:2" type="submit"><i class="fa fa-shopping-cart"></i>
                            Thêm giỏ hàng
                        </button>
                    </span>

                    <p><b>Mô tả:</b> {{ $value['desc'] }}</p>
                    <p><b>Thương hiệu:</b><a href="../../brand/{{ $value['brand_id'] }}">{{ $value->brand_foreign['name'] }}</a></p>
                    <p><b>Danh mục:</b> <a href="../../category/{{ $value['category_id'] }}">{{ $value->category_foreign['name'] }}</a></p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->
    </form>


        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                 
                    <li class="active"><a href="#reviews" data-toggle="tab">Chi tiết sản phẩm</a></li>
                </ul>
            </div>
            <div class="tab-content">   
                <div class="tab-pane fade active in" id="reviews" >
                    <div class="col-sm-12">
                        <ul>
                            <li>{{ $value['content'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/category-tab-->
@endforeach
        
    @endsection


