@extends('admin_layout')
@section('title','Danh Sách Sản Phẩm')
@section('content')

<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
<h1>Danh Sách Sản Phẩm</h1>    
  </div>
  @if(session('messages'))
  <div class="text-success">{{ session('messages') }}</div>
  @endif
      <div class="row w3-res-tb">
     
        <div class="col-sm-4">
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Hình ảnh</th>
              <th>Danh mục</th>
              <th>Thương hiệu</th>
              <th>Trạng thái</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
        @foreach($product as $key => $value)
            <tr>
              <td>{{ $value->name }}</td>
              <td>{{ number_format($value->price,0,',','.') }} vnd</td>
              <td><img src="../backend/images/{{ $value->image }}" height="100" width="100"></td>
              
              <?php /// lấy tên category&brand qua khóa ngoại ?>
              <td>{{ $value->category_foreign->name }}</td>
              <td>{{ $value->brand_foreign->name }}</td>

              <td>
                @if($value->status == 1) 
                  <a href="../../admin/product/unactive/{{$value->id}}" >Hiển thị</a>
                @else
                <a href="../../admin/product/active/{{$value->id}}">Ẩn</a> 
                @endif
              </td>

              <td>
                <a href="../../admin/product/edit/{{ $value->id }}" ui-toggle-class=""><i class="fas fa-pen-square text-success text-active"></i></a>
                  <a onclick="return Delete()"  href="../../admin/product/delete/{{ $value->id }}"><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach

          
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
            {{ $product->links() }}
        </div>
      </footer>
    </div>
  </div>
@endsection

@section('script')
@parent
<script>
  function Delete(){
    return confirm('Bạn xác nhận muốn xóa sản phẩm này?');
  }
</script>
@endsection