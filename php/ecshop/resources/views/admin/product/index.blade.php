@extends('layouts.admin')

@section('title')
    <title>Sản phẩm</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin1/product/index/list.css') }}">
@endsection

@section('js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="{{ asset('admin1/product/index/list.js') }}"></script>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' => 'Danh sách', 'key' => 'sản phẩm'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href=" {{ route('product.create') }}" class="btn btn-success float-right m-2">Thêm</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    @foreach($products as $productItem)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $productItem->id }}</th>
                          <td> {{ $productItem->name }}</td>
                          <td> {{ number_format($productItem->price) }}</td>
                          <td> 
                              <img class="product_image_150_100"  src="{{ $productItem->feature_image_path }}" alt="">
                          </td>
                          <td> {{ $productItem->category->name }}</td>
                          <td>
                            <a href="{{ route('product.edit',['id' => $productItem->id]) }}" class="btn btn-default">Sửa</a>
                            <a href="" 
                              class="btn btn-danger action_delete"
                              data-url="{{ route('product.delete',['id' => $productItem->id]) }}">Xóa</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $products->links() }}
                </div>
            </div>

        </div>

      </div>
    </div>

  </div>
@endsection


