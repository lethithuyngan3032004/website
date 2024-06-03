@extends('layouts.admin')

@section('title', 'Quản lí thành viên')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lí thành viên</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Quản lí thành viên</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-12 text-right">
          <a class="btn btn-sm btn-success" href="{{ route("admin.user.create")}}">Thêm
            <i class="fas fa-plus"></i>
          </a>
          <a class="btn btn-sm btn-danger" href="#">Thùng rác
            <i class="fas fa-trash"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width:30px">#</th>
            <th class="text-center" style="width:190px">Hình</th>
            <th class="text-center">Họ tên</th>
            <th class="text-center">Tên đăng nhập</th>
            <th class="text-center">Điện thoại</th>
            <th class="text-center">Email</th>
            <th class="text-center">Vai trò</th>
            <th class="text-center" style="width:190px">Chức năng</th>
            <th class="text-center" style="width:30px">ID</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $row)
          <tr>
            <td class="text-center">
              <input type="checkbox" name="checkID[]" id="checkID" value="{{ $row->id }}">
            </td>
            <td class="text-center">
              <img src="{{ asset("images/users/".$row->image) }}" class="img-fluid" alt="{{ $row->image }}">
            </td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->roles }}</td>
            <td class="text-center">
              <a href="{{ route("admin.user.status",['id'=>$row->id]) }}" class="btn btn-sm btn-success" >
                <i class="fas fa-toggle-on"></i>
              </a>
              <a href="{{ route("admin.user.show",['id'=>$row->id]) }}" class="btn btn-sm btn-info" >
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ route("admin.user.edit",['id'=>$row->id]) }}" class="btn btn-sm btn-primary" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="{{ route("admin.user.destroy",['id'=>$row->id]) }}" class="btn btn-sm btn-danger" >
                <i class="fas fa-trash"></i>
              </a>
            </td>
            <td class="text-center">{{ $row->id }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
     
    </div>
  </div>
</section>
@endsection