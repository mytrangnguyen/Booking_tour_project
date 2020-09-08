<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h3 class="mb-0"><a href="{{route('trangchu')}}" class="text-black h3 mb-0">GO WITH US</a></h3>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{route('trangchu')}}">Trang chủ</a>
                </li>
                <li class="has-children">
                  <a href="#">Điểm đến</a>
                  <ul class="dropdown">
                    @foreach($name_city as $city)
                       <li><a href="{{route('diemden',$city->id_city )}}">{{$city['name_city']}}</a></li>
                    @endforeach 
                  </ul>
                </li>
                
                <li><a href="{{route('khuyenmai1')}}">Khuyến mãi</a></li>
                <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                <li><a href="#">Blog</a></li>
                
                <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                @if(Session::has('user'))
                       <li><a href="">{{Session::get('user.user_name')}}</a></li>
                       &nbsp;
                        <li><a href="{{route('logout1')}}">Đăng xuất</a></li>
                 @else
                    <li><a href="{{route('register')}}">Đăng kí</a></li>
                      &nbsp;
                      &nbsp;
                    <li><a href="{{route('login')}}" onclick="">Đăng nhập</a></li>
                 @endif
              </ul>
            </div>  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

 
