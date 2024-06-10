@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết sản phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
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
                    <a href="{{ route("admin.product.edit", $product->id)}}" class="btn btn-sm btn-primary">
                        <i class="far fa-edit"></i> Sửa
                    </a>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                    <a class="btn btn-sm btn-info" href="{{ route("admin.product.index")}}">
                        <i class="fa fa-arrow-left"></i> Về danh sách
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width:30%;">
                            <strong>Tên trường</strong>
                        </th>
                        <th class="text-center" style="width:70%;">Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <td>Danh mục</td>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                    <tr>
                        <td>Thương hiệu</td>
                        <td>{{ $product->brand->name }}</td>
                    </tr>
                    <tr>
                        <td>Slug</td>
                        <td>{{ $product->slug }}</td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <td>Giá sale</td>
                        <td>{{ $product->pricesale }}</td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td>
                            <img class="img-fluid" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" style="width:70px; height:100px;">
                        </td>
                    </tr>
                    <tr>
                        <td>Số lượng</td>
                        <td>{{ $product->qty }}</td>
                    </tr>
                    <tr>
                        <td>Chi tiết sản phẩm</td>
                        <td>{{ $product->detail }}</td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <td>Ngày tạo</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Người tạo</td>
                        <td>{{ $product->creator->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Ngày cập nhật</td>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Người cập nhật</td>
                        <td>{{ $product->updater->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td>{{ $product->status == 1 ? 'Xuất bản' : 'Chưa xuất bản' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
