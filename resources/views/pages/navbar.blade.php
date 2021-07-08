<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <h3>Chào mừng đến trang quản trị</h3>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      @if(Auth::check())
     <div><h3>{{ Auth::user()->name }}</h3></div> <?php ///nếu tồn tại user -> hiển thị name ?>
     @endif
    </ul>
  </nav>