@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin1/slider/add/add.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name' => 'Sửa', 'key' => 'slider'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('slider.update',['id'=>$slider->id]) }}"method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <label >Tên Slider</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" 
                            placeholder="Nhập tên Slider" name="name"
                            value="{{ $slider->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                      <label >Mô tả Slider</label>
                      <textarea 
                          class="form-control @error('description') is-invalid @enderror"
                          placeholder="Nhập mô tả"
                          name="description" rows="8">{{ $slider->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    
                    <div class="form-group">
                      <label >Hình ảnh</label>
                      <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" 
                            name="image_path"
                            >
                        <div class="col-md-4">
                            <div class="row">
                                <img src="{{ $slider->image_path }}" class="image_slider">
                            </div>
                        </div>
                        @error('image_path')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


