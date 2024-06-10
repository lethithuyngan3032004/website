@extends('layouts.admin')

@section('title', 'Quản lí đơn hàng')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lí đơn hàng</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Quản lí đơn hàng</li>
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
         
          <a class="btn btn-sm btn-danger" href="{{ route('admin.order.trash') }}">Thùng rác
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
            <th class="text-center">Khách hàng</th>
            <th class="text-center">Điện thoại</th>
            <th class="text-center">Email</th>
            <th class="text-center" style="width:190px">Chức năng</th>
            <th class="text-center" style="width:30px">ID</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $row)
          @php
          $arg=['id'=>$row->id];
        @endphp
          <tr>
            <td class="text-center">
              <input type="checkbox" name="checkID[]" id="checkID" value="{{ $row->id }}">
            </td>
            <td>{{ $row->delivery_name }}</td>
            <td>{{ $row->delivery_phone }}</td>
            <td>{{ $row->delivery_email }}</td>
            <td class="text-center">
              <a href="{{ route("admin.order.status",$arg) }}" class="btn btn-sm btn-success" >
                <i class="fas fa-toggle-on"></i>
              </a>
              <a href="{{ route("admin.order.show",$arg) }}" class="btn btn-sm btn-info" >
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ route("admin.order.edit",$arg) }}" class="btn btn-sm btn-primary" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="{{ route("admin.order.destroy",$arg) }}" class="btn btn-sm btn-danger" >
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