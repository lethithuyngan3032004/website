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
                    <div class="col-md-12 text-right">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-info">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Về danh sách
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body p-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:30%">Tên trường</th>
                            <th>Giá trị</th>
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
                            <td>{{ $product->category_name }}</td>
                        </tr>
                        <tr>
                            <td>Thương hiệu</td>
                            <td>{{ $product->brand_name }}</td>
                        </tr>
                       
                        <tr>
                            <td>slug</td>
                            <td>{{ $product->slug }}</td>
                        </tr>
                        <tr>
                            <td>Giá </td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>Giá sale</td>
                            <td>{{ $product->pricesale }}</td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td>
                                <img class="img-fluid" src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->image }}" style="width:70px; height:100px;">
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
                            <td>created_at</td>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                        <tr>
                            <td>created_by</td>
                            <td>{{ $product->created_by }}</td>
                        </tr>
                        <tr>
                            <td>updated_at</td>
                            <td>{{ $product->updated_at }}</td>
                        </tr>
                        <tr>
                            <td>updated_by</td>
                            <td>{{ $product->updated_by }}</td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>{{ $product->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
