

@extends('admin_layout')
@section('title','Danh Sách Quản Trị Viên')
@section('content')

<h1>Danh Sách Quản Trị Viên</h1>
@if(session('message'))
<div class="text-success">{{ session('message') }}</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Email</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Level</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($user as $key => $value)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['phone'] }}</td>
        @if($value->level == 1)
        <td>Admin</td>
        @else
        <td>Manager</td>
        @endif
        <td>
            <a href="../../admin/user/edit/{{ $value['id'] }}"><i><i class="fas fa-pencil-alt"></i></a>
            <a href="../../admin/user/delete/{{ $value['id'] }}"><i class="fa fa-times text-danger text"></i></a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
