<header id="header"><!--header-->

    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="../../"><img src="images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="../../cart"><i class="fa fa-shopping-cart"></i>Giỏ Hàng({{ Cart::count() }})</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="../../">Trang Chủ</a></li>
                            <li><a href="../../product">Sản Phẩm</a></li>
                            <li><a href="../../cart">Giỏ Hàng</a></li>
                            <li><a href="../../contact">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <form action="../../search" method="post">
                        @csrf
                    <div class="search_box pull-right">
                        <input type="text" name="keyword" placeholder="Tìm Kiếm"/>
                        <button type="submit" name="btn" class="btn btn-outline-primary">Xác Nhận</button>
                    </div>
                    </form>
                </div>
                </div>


            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->