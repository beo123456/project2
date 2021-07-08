<section>
    <div class="container">
        <div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh Mục</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    @foreach ($category as $value)
                    <h4 class="panel-title"><a href="../../category/{{ $value['id'] }}">{{ $value['name'] }}</a></h4>
                    @endforeach
                </div>
            </div>
        </div><!--/category-products-->
    
        <div class="brands_products"><!--brands_products-->
            <h2>Thương Hiệu</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    @foreach ($brand as $value2)
                    <li><a href="../../brand/{{ $value2['id'] }}">{{ $value2['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div><!--/brands_products-->
    
    </div>
</div>