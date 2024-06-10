@extends('layouts.admin')
@section('title','Thùng rác danh mục')
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
        <h1>Thùng rác danh mục</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thùng rác danh mục</li>
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
          <a class="btn btn-sm btn-info" href="{{ route('admin.category.index') }}">
            <i class="fas fa-arrow-left"> Về danh sách</i>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      @if ($list->isEmpty())
      <div class="text-center">
        <p>Thùng rác rỗng</p>
      </div>
      @else
      <table class="table table-bordered table-hover table-striped">
        <thead>
          <th class="text-center" style="width:30px">#</th>
          <th class="text-center" style="width:140px">Hình</th>
          <th class="text-center">Tên danh mục</th>
          <th class="text-center">Slug</th>
          <th class="text-center" style="width:140px">Chức năng</th>
          <th class="text-center" style="width:30px">id</th>
        </thead>
        <tbody>
          @foreach ($list as $row)
          @php
          $args=['id'=>$row->id];
          @endphp
          <tr>
            <td class="text-center">
              <input type="checkbox" name="checkID[]" id="checkID" value="1">
            </td>
            <td class="text-center">
              <img src="{{ asset("images/categorys/".$row->image) }}" class="img-fluid" alt="{{ $row->image }}">
            </td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->slug }}</td>
            <td class="text-center">
              <div class="d-inline-flex">
                <a href="{{ route('admin.category.edit', $args) }}" class="btn btn-primary btn-xs mr-1">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('admin.category.restore', $args) }}" class="btn btn-success btn-xs mr-1">
                  <i class="fas fa-undo-alt"></i>
                </a>
                <form action="{{ route('admin.category.destroy', $args) }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-xs" name="delete" type="submit">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </div>
            </td>
            <td class="text-center">{{ $row->id }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
  </div>
</section>
@endsection
