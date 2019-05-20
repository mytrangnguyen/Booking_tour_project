@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt --> 
	<body>
		<div class="site-blocks-cover inner-page-cover" style="background-image: url(public/source/images/bien.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light"></h1>
              <div><a href="index.html"></a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Chi tiết</span></div>
              
            </div>
          </div>
        </div>
      </div> 
      <div>
      	<h2>Liên hệ đặt tour: 0123475477</h2>
      </div> 
      <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Các tour liên quan</h2>
            
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
              <img src="/Booking_tour/public/source/images/3.jpg" alt="Image"  height="250">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Nha Trang</h3>
              </div>
            </a>
          </div>

          
        </div>
      </div>
    
    </div>

	</body>

@endsection