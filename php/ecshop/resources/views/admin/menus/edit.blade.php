@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name' => 'Thay đổi', 'key' => 'menu'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action={{ route('menus.update',['id' => $menuEdit->id]) }} method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label >Tên menu</label>
                        <input type="text" class="form-control" placeholder="Nhập tên Menu" name="name" value="{{ $menuEdit->name }}">
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Chọn menu cha</label>
                        <select class="form-control" name="parent_id">
                          <option value="0">Chọn menu</option>
                            {!! $optionSelect !!}
                        </select>
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


