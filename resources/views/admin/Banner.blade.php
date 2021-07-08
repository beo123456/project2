@extends('admin_layout')
@section('title','Quản Lý Banner')
@section('content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
<h1>Quản Lý Banner</h1>    
  </div>
  @if(session('messages'))
  <div class="text-success">{{ session('messages') }}</div>
  @endif
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Tên Banner</th>
              <th>Hình Ảnh</th>
              <th>Mô Tả</th>
              <th>Trạng thái</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
        @foreach($banner as $key => $value)
            <tr>
              <td>{{ $value->name }}</td>
              <td><img width="350px" height="150px" src="../../public/backend/banner/{{ $value->image }}" alt=""></td>
              <td>{{ $value->desc }}</td>

              <td>
                @if($value->status == 1) 
                  <a href="../../admin/banner/unactive/{{$value->id}}">Hiển thị</a>
                @else
                <a href="../../admin/banner/active/{{$value->id}}">Ẩn</a> 
                @endif
              </td>

              <td>
                  <a onclick="return Delete('{{ $value->name }}')"  href="../../admin/banner/delete/{{ $value->id }}"><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach

          
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
            {{ $banner->links() }}
        </div>
      </footer>
    </div>
  </div>
@endsection

@section('script')
		@parent
		<script>
			function Delete(name){
				return confirm('Bạn muốn xóa banner '+name+' ?');
			}
		</script>
		@endsection
