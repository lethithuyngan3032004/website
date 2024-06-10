@extends('layouts.admin')

@section('title', 'Quản lí bài viết')

@section('content')
@if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Quản lí bài viết</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Quản lí bài viết</li>
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
          <a class="btn btn-sm btn-success" href="{{ route("admin.post.create")}}">Thêm
            <i class="fas fa-plus"></i>
          </a>
          <a class="btn btn-sm btn-danger" href="{{ route('admin.post.trash') }}">Thùng rác
            <i class="fas fa-trash"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
    
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width:30px">#</th>
            <th class="text-center" style="width:190px">Hình</th>
            <th class="text-center">Tiêu đề bài viết</th>
            <th class="text-center">Chủ đề</th>
            <th class="text-center">Kiểu</th>
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
            <td class="text-center">
              <img src="{{ asset("images/posts/".$row->image) }}" class="img-fluid" alt="{{ $row->image }}">
            </td>
            <td>{{ $row->title }}</td>
            <td>{{ $row->topicname }}</td>
            <td>{{ $row->type }}</td>
            <td class="text-center">
              @if ($row->status == 1)
              <a href="{{ route("admin.post.status",$arg) }}" class="btn btn-sm btn-success" >
                <i class="fas fa-toggle-on"></i>
              </a>
              @else
              <a href="{{ route("admin.post.status",$arg) }}" class="btn btn-sm btn-danger" >
                <i class="fas fa-toggle-off"></i>
              </a>
              @endif

              <a href="{{ route("admin.post.show",$arg) }}" class="btn btn-sm btn-info" >
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ route("admin.post.edit",$arg) }}" class="btn btn-sm btn-primary" >
                <i class="fas fa-edit"></i>
              </a>
              <a href="{{ route("admin.post.destroy",$arg) }}" class="btn btn-sm btn-danger" >
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