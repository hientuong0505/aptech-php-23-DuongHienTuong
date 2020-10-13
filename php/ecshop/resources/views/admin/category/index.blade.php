@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' => 'Category', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    @foreach($categories as $cate)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $cate->id}}</th>
                          <td> {{ $cate->name }}</td>
                          <td>
                            <a href="{{ route('categories.edit',['id' => $cate->id]) }}" class="btn btn-default">Sửa</a>
                            <a href="{{ route('categories.delete',['id' => $cate->id]) }}" class="btn btn-danger">Xóa</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $categories->links() }}
                </div>
            </div>

        </div>

      </div>
    </div>

  </div>
@endsection


