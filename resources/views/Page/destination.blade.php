@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt --> 
  <body>
    <style type="text/css">
      .text-primary mb-2 d-block {
        text-decoration: line-through;
      }
    </style>
  
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
      @foreach($Slide as $sl)
      <div class="site-blocks-cover overlay" style="background-image: url(/booking_tour/public/source/images/{{$sl->images}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">{!! $sl["name"] !!}</h1>
              
            </div>
          </div>
        </div>
      </div>  
      @endforeach

    </div>


    
    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black"><CENTER>Các tour tại {{$name_city->name_city}} </CENTER></h2>
            <p class="color-black-opacity-5">Hãy chọn điểm đến tiếp theo của bạn</p>
          </div>
        </div>
        <div class="row">
          @foreach($tour_city as $tour)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
           
            <a href="{{route('detail',$tour->id)}}" class="unit-1 text-center">
              <img style="width: 500px;height: 250px" src="/booking_tour/public/source/images/{{$tour->image_tour}}"alt="Image" class="img-fluid">
              
              <div class="unit-1-text">
                @if($tour->price_promotion==0)
                <strong class="text-primary mb-2 d-block">{!! $tour->price_tour !!}$</strong>
                @else
                <strong class="text-primary mb-2 d-block" style="text-decoration: line-through;">{!! $tour->price_tour !!}$</strong>
                <strong class="text-primary mb-2 d-block">{!! $tour->price_promotion !!}%</strong>
                @endif
                <h3 class="unit-1-heading">{!! $tour->name_tour !!}</h3>
              </div>
            </a>
           
          </div> @endforeach
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black"><CENTER>CÁC TOUR KHÁC  </CENTER></h2>
            <p class="color-black-opacity-5">Chọn điểm đến tiếp theo của bạn</p>
          </div>
        </div>
        <div class="row">
          @foreach($other_tour as $tour)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
           
            <a href="{{route('detail',$tour->id)}}" class="unit-1 text-center">
              <img src="/booking_tour/public/source/images/{{$tour->image_tour}}" style="width: 500px;height: 250px"  alt="Image" class="img-fluid">
              
              <div class="unit-1-text">
                @if($tour->price_promotion==0)
                <strong class="text-primary mb-2 d-block">{!! $tour->price_tour !!}$</strong>
                @else
                <strong class="text-primary mb-2 d-block" style="text-decoration: line-through;">{!! $tour->price_tour !!}$</strong>
                <strong class="text-primary mb-2 d-block">{!! $tour->price_promotion !!}%</strong>
                @endif
                <h3 class="unit-1-heading">{!! $tour->name_tour !!}</h3>
              </div>
            </a>
           
          </div> @endforeach
        </div>
      </div>
    
    </div>
    

    
    
    
  </div>

  
    
  </body>
@endsection