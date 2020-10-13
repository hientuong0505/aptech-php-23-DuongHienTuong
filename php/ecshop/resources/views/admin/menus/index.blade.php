@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' => 'Danh sách', 'key' => 'menu'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('menus.create') }}" class="btn btn-success float-right m-2">Thêm</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên menu</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    @foreach($menus as $menu)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $menu->id}}</th>
                          <td> {{ $menu->name }}</td>
                          <td>
                            <a href="{{ route('menus.edit',['id' =>$menu->id]) }}" class="btn btn-default">Sửa</a>
                            <a href="{{ route('menus.delete',['id' =>$menu->id]) }}" class="btn btn-danger">Xóa</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $menus->links() }}
                </div>
            </div>

        </div>

      </div>
    </div>

  </div>
@endsection


