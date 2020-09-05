@extends('layout.main')

@section('title')
    Đăng ký
@endsection

@section('content')
@component('layout.components.title')
Đăng ký
@endcomponent

    <div class="container-fluid mt-3 form-register">
        <div class="row">
            <div class="col-3"></div>

                <div class="col-6 box">
                    <form action="{{route('newRegister')}}" method="post" id="form-register">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="post" />

                        <div class="form-group ">
                            <label class="text-uppercase font-weight-bold" for="name">Tên</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="UserName">
                        </div>

                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold" for="name">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold" for="name">nhập lại mật khẩu</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-password">
                        </div>
                        
                        <div class="form-group">
                            <label class="text-uppercase font-weight-bold" for="name">email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>

                        <br>
                        <div class="form-group">
                            <button class="btn btn-info btn-dangKy text-center">Đăng ký</button>
                        </div>

                    </form>
                </div>

                <div class="col-3"></div>
        </div>
    </div>

    <script type="text/javascript">
        $('#form-register').validate({
            rules:{
                username:{
                    required:true,
                    minlength:4
                },
                password:{
                    minlength:8,
                    required:true
                },
                password_confirmation:{
                    equalTo:"#password"
                },
                email:{
                    email:true,
                    required:true
                }
            },

            messages:{
                username:{
                    required:"Vui lòng nhập tên",
                    minlength:"Nhập từ 4 kí tự trở lên"
                },
                password:{
                    required:"Vui lòng nhập mật khẩu",
                    minlength:"Nhập từ 8 kí tự trở lên"
                },
                password_confirmation:{
                    equalTo:"Mật khẩu xác nhận không đúng"
                },
                email:{
                    required:"Vui lòng nhập email",
                    email:"Không đúng định dạng email"
                }

            }
        })
    </script>
@endsection