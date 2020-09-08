@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt -->
<body>
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" >
    <form action="" method="post" role="form">
      
      {{ csrf_field() }}

      <div class="alert alert-danger error errorLogin" style="display: none;">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <p style="color:red; display:none;" class="error errorLogin"></p>
      </div>
      <div class="col-md-3">Email</div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" id="email" placeholder="Vui lòng nhập Email" name="email">
          <p style="color:red; display: none" class="error errorEmail"></p>
        </div>

        <div class="col-md-3">Mật khẩu</div>
        <div class="form-group col-md-8">
          <input type="password" class="form-control" id="password" placeholder="Vui lòng nhập mật khẩu" name="password">
          <p style="color:red; display: none" class="error errorPassword"></p>
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"> Ghi nhớ
          </div>
        <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <button id="dang-nhap" type="button" class="btn btn-success">Đăng nhập</button>
              </div>
            </div>
            <p>Nếu bạn chưa có tài khoản hãy bấm vao đây để đăng kí <a href="{{route('register')}}">Đăng kí!!!</a></p>
        </div>
      </div>
    <div class="col-md-2"></div>
     </form>
     </div>
</body>

@endsection
    
