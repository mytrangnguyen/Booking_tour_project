@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt -->
<body>
  <div class="row">
    <div class="col-md-4"></div>
    <form action="{{route('addUsers')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <h4>Đăng kí tài khoản</h4>
        @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
       <div class="col-md-3">Tên</div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" id="ten" placeholder="Nhập tên đăng nhập của bạn" name="ten">
        </div>
        <div class="col-md-3">Mật khẩu</div>
        <div class="form-group col-md-8">
          <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu của bạn" name="matkhau">
        </div>
        
        <div class="col-md-3">Địa chỉ</div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ của bạn" name="diachi">
        </div>
        <div class="col-md-3">Số điện thoại</div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại của bạn" name="sdt">
        </div>

      <div class="col-md-3">Email</div>
        <div class="form-group col-md-8">
          <input type="text" class="form-control" id="email" placeholder="Nhập email của bạn" name="email">
        </div>
       <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-success" onclick="">Đăng kí</button>
              </div>
        </div>
            <p>Nếu bạn đã có tài khoản hãy bấm vào đây để đăng nhập <a href="{{route('login')}}">Đăng nhập!!!</a></p>
        </div>
      </div>
    <div class="col-md-4"></div>
     </form>
  </div>
</body>
@endsection
    
