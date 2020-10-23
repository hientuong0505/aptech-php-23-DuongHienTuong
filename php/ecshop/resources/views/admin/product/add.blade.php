@extends('layouts.admin')

@section('title')
    <title>Thêm sản phẩm</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin1/product/add/add.css') }}" rel="stylesheet" />

@endsection

@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name' => 'Thêm', 'key' => 'sản phẩm'])
  <div class="col-md-12">

      {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif --}}

  </div>

  <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <label >Tên sản phẩm</label>
                      <input type="text" 
                          class="form-control @error('name') is-invalid @enderror" 
                          placeholder="Nhập tên sản phẩm"
                          name="name"
                          value="{{ old('name') }}">
                          @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    
                    <div class="form-group">
                        <label >Giá sản phẩm</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" 
                              placeholder="Nhập giá sản phẩm" name="price"
                              value="{{ old('price') }}">
                        <small id="emailHelp" class="form-text text-muted"></small>
                        @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label >Ảnh đại diện</label>
                        <input type="file" class="form-control-file"  name="feature_image_path">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label >Ảnh chi tiết</label>
                        <input type="file" class="form-control-file"  name="image_path[]" multiple>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label>Chọn danh mục </label>
                        <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id">
                          <option value="">Chọn danh mục</option>
                            {!! $htmlOption !!}
                        </select>
                        @error('category_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nhập tags cho sản phẩm</label>
                        <select class="form-control tag_select_choose" multiple="multiple" name="tags[]">

                        </select>
                    </div>

            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Nội dung</label>
                <textarea class="form-control tinymce_editor_init @error('content') is-invalid @enderror" rows="10" 
                          name="content"
                          value="">{{ old('content') }}</textarea>
                @error('content')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>


            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

      </div>
    </div>
  </form>
  </div>

@endsection

@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ asset('admin1/product/add/add.js') }}"></script>

@endsection

