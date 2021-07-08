
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="../../admin" class="d-block">Trang Chủ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <p>
               Danh Mục Sản Phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt Kê Danh Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin/category/add" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <p>
               Thương Hiệu Sản Phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/brand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt Kê Thương Hiệu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin/brand/add" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Thương Hiệu</p>
                </a>
              </li>
          </ul>
          </nav>

        @php if(Auth::user()->level == 1){ 
          echo ' <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                  <p>
                    Danh Mục Quản Trị Viên
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../admin/user" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Liệt Kê Quản Trị Viên</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../admin/user/add" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Quản Trị Viên </p>
                    </a>
                  </li>
                </ul>
              </li>
        </nav> ';
      }
      @endphp
          
      <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                  <p>
                    Sản Phẩm
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../admin/product" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh Sách Sản Phẩm</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../admin/product/add" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Sản Phẩm </p>
                    </a>
                  </li>
                </ul>
              </li>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <p>
                Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/banner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liệt Kê Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../admin/banner/add" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Banner </p>
                </a>
              </li>
            </ul>
          </li>
  </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="../../admin/order" class="nav-link ">
              Đơn Hàng
            </a>
          </li>
  </nav>
     
              
      </ul>
      <ul id="logout" class="text-danger">
        <li class="nav-item">
          <p><a href="{{ route('logout') }}">Logout</a></p>
        </a>
      </li>
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>