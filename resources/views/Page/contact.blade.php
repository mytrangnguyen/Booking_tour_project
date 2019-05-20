@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt --> 
  <body>
  
  <div class="site-blocks-cover inner-page-cover" style="background-image: url(public/source/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light"></h1>
              <div><a href="index.html"></a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Liên hệ</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Họ</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Tên</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Ghi chú</label> 
                  <textarea name="message" id="message" cols="30" rows="9" class="form-control" placeholder="Viết câu hỏi cho chúng tôi ở đây..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gửi" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Địa chỉ</p>
              <p class="mb-4">101B Lê Hữu Trác</p>

              <p class="mb-0 font-weight-bold">Số điện thoại</p>
              <p class="mb-4"><a href="#">03347785123</a></p>

              <p class="mb-0 font-weight-bold">Địa chỉ email</p>
              <p class="mb-0"><a href="#">info@gowithus.net</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <img src="public/source/images/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
             
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
@endsection