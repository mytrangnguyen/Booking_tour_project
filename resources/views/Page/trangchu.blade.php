@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt --> 
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="slide-one-item home-slider owl-carousel">

      @foreach($slide as $sl)
     <div class="site-blocks-cover overlay" style="background-image: url(/Booking_tour/public/source/images/{{$sl->image}});" data-aos="fade" data-stellar-background-ratio="0.5">
       <div class="container">
         <div class="row align-items-center justify-content-center text-center">

           <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
             <p class="mb-5">{{$sl->description}}</p>
           </div>
         </div>
       </div>
     </div>
     @endforeach  
    </div>


    <div class="site-section">
      
      <div class="container overlap-section">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="public/source/images/1.jpg" alt="Image" height="350px" width="350px">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Khám phá Việt Nam</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="public/source/images/2.jpg" alt="Image" height="350px" width="350px">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Đi khám muôn nơi</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="public/source/images/3.jpg" alt="Image" height="350px" width="350px">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Tiết kiệm</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>


    


    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Go with us</h2>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/1.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$590</strong>
                <h3 class="unit-1-heading">Đà Lạt</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/2.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Đà Năng</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/3.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Nha Trang</h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/4.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$320</strong>
                <h3 class="unit-1-heading">Phú QUốc</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/5.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$290</strong>
                <h3 class="unit-1-heading">Lý Sơn</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="/Booking_tour/public/source/images/6.jpg" alt="Image"  height="250px">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Hồ Chí Minh</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

    <!-- <div class="site-section bg-light">
      
    </div> -->
    
    
  </div>

  
    
  </body>
@endsection