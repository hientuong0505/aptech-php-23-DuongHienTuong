@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' => 'Màn hình', 'key' => 'chính'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                Trang chủ
            </div>
            @auth
                Đã đăng nhập
            @endauth
            @guest
                Chưa đăng nhập
            @endguest
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


