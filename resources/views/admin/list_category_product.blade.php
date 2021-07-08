@extends('admin_layout')
@section('title','Liệt Kê Danh Mục Sản Phẩm')
@section('content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
<h1>Liệt Kê Danh Mục Sản Phẩm</h1>    
  </div>
  @if(session('messages'))
  <div class="text-success">{{ session('messages') }}</div>
  @endif
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Tên danh mục</th>
              <th>Trạng thái</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
        @foreach($category as $key => $value)
            <tr>
              <td>{{ $value->name }}</td>

              <td>
                @if($value->status == 1) 
                  <a href="../../admin/category/unactive/{{$value->id}}">Hiển thị</a>
                @else
                <a href="../../admin/category/active/{{$value->id}}">Ẩn</a> 
                @endif
              </td>

              <td>
                <a href="../../admin/category/edit/{{ $value->id }}" ui-toggle-class=""><i class="fas fa-pen-square text-success text-active"></i></a>
                  <a onclick="return Delete('{{ $value->name }}')"  href="../../admin/category/delete/{{ $value->id }}"><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach

          
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
            {{ $category->links() }}
        </div>
      </footer>
    </div>
  </div>
@endsection

@section('script')
		@parent
		<script>
			function Delete(name){
				return confirm('Bạn muốn xóa danh mục '+name+' ?');
			}
		</script>
		@endsection
