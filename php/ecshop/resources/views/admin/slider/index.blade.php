@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('admin1/slider/index/index.css') }}">
@endsection

@section('js')
  <script src="{{ asset('vendors/sweetAlert2/sweetalert2@10.js') }}"></script>
  <script src="{{ asset('admin1/slider/index/index.js') }}"></script>
@endsection

@section('content')

@section('js')
  <script src="{{ asset('vendors/sweetAlert2/sweetalert2@10.js') }}"></script>
  <script src="{{ asset('admin1/menu/index/list.js') }}"></script>
@endsection
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' => 'Danh sách', 'key' => 'slider'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <a href="{{ route('slider.create') }}" class="btn btn-success float-right m-2">Thêm</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên slider</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    @foreach($sliders as $slider)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $slider->id }}</th>
                          <td>{{ $slider->name }}</td>
                          <td>{{ $slider->description }}</td>
                          <td>
                            <img class="image_slider_150_100" src="{{ $slider->image_path }}" alt="" >
                          </td>
                          <td>
                            <a data-url="{{ route('slider.edit',['id'=>$slider->id]) }}" class="btn btn-default">Sửa</a>
                            <a href="{{ route('slider.delete',['id'=>$slider->id]) }}" class="btn btn-danger action_delete action_delete">Xóa</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $sliders->links() }}
                </div>
            </div>

        </div>

      </div>
    </div>

  </div>
@endsection


