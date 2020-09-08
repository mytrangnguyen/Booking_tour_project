@extends('master')  <!-- kế thừa -->
@section('content') 
 <!-- gọi lại phần đã cắt --> 

  <body>
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(/booking_tour/public/source/images/{{$tours->image_tour}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light"></h1>
              
              
            </div>
          </div>
        </div>
      </div> 

    <div>
      <div><br></div>
      <center><h2 style="color: red ">{{$tours->name_tour}}</h2></center>
      <div class="row row-image-box isdesktop">
        <div class="col-md-4" style="margin-left:100px; padding-top: 20px;">
          <p>NGÀY BẮT ĐẦU: {{$tours['start_date']}}</p>
          <p>ĐIỂM KẾT THÚC: {{$tours['end_date']}}</p>
        </div>
        <div class="col-md-4" style="margin-left:100px; padding: 20px;">
          <p>PHƯƠNG TIỆN: {{$pt['details']}}</p>
          <p>ĐIỂM XUẤT PHÁT: {{$tours['start_place']}}</p>
        </div>
      </div>
      <div style="margin-left: 100px;">
        <table border="1">
          <tr class="he_st_table">
            <td class="we_st_table">Ngày khởi hành</td>
            <td class="we_st_table">Mã tour</td>
            <td class="we_st_table">Giá tour</td>
            <td class="we_st_table">Giá trẻ em</td>
            <td class="we_st_table">Giá em bé</td>
            
          </tr>
          <tr class="he_st_table">
            <td class="we_st_table">{{$tours['start_date']}}</td>
            <td class="we_st_table">{{$tours['id']}}</td>
            <td class="we_st_table">{{$tours['price_tour']}}</td>
            <td class="we_st_table">{{$tre_em = ($tours['price_tour']*(70)/(100))}}</td>
            <td class="we_st_table">{{$em_be = ($tours['price_tour']*(0)/(100))}}</td>
            @if(Session::has('user'))
             <div style="margin-left: 50px"><td><a href="{{route('dattour1',$tours['id'])}}" class="btn btn-primary py-2 px-4 text-white">Đặt tour</a></td> </div>
            @else
              <div style="margin-left: 50px"><td><a href="{{route('login1')}}" class="btn btn-primary py-2 px-4 text-white">Đặt tour</a></td> </div>
            @endif
          </tr>
        </table>

      </div>
      <div class="row row-image-box isdesktop">
        <div class="col-md-10" style="margin-left:100px; padding-top: 20px;">
          <h2>CHƯƠNG TRÌNH TOUR</h2>
          @foreach($ht as $hanhtrinh)
          <div>
            <h5>Ngày {{$hanhtrinh->days}}: {{$hanhtrinh->name_place}}</h5>
            <img style="width: 800px; height: 350px; margin-left: 200px;" src="/Booking_tour/public/source/images/{{$hanhtrinh->image}}">
            <p>{{$hanhtrinh->description}}</p>
          </div>
          @endforeach
        </div>
      </div>

    <div class="site-section">
    
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black"><CENTER>CÁC TOUR KHÁC  </CENTER></h2>
            <p class="color-black-opacity-5">Chọn điểm đến tiếp theo của bạn</p>
          </div>
        </div>
        <div class="row">
          @foreach($other_tour1 as $tour)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
           
            <a href="{{route('detail',$tour->id)}}" class="unit-1 text-center">
              <img src="/booking_tour/public/source/images/{{$tour->image}}" style="width: 500px;height: 250px"  alt="Image" class="img-fluid">
              
              <div class="unit-1-text">
                @if($tour->price_promotion==0)
                <strong class="text-primary mb-2 d-block">{!! $tour->price_tour !!}$</strong>
                @else
                <strong class="text-primary mb-2 d-block" style="text-decoration: line-through;">{!! $tour->price_tour !!}$</strong>
                <strong class="text-primary mb-2 d-block">{!! $tour->price_promotion !!}$</strong>
                @endif
                <h3 class="unit-1-heading">{!! $tour->name_tour !!}</h3>
              </div>
            </a>
           
          </div> 
          @endforeach
          

        <div class="well">

            <h4>Viết bình luận...<span class="glyphicon glyphicon-pencil"></span></h4>
            <form id="form2" action="{{route('comment')}}" method="post" role="form">
              @csrf
              <div class="form-group">
                <input type="hidden" name="id_tour" value="{{$tours->id}}"/>
                <input type="hidden" name="id_user" value="{{Session::get('user.id')}}"/>
                <textarea class="form-control" name="detail" rows="2" cols="100"  ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
          </div>
   
     </div>
     <br></br>
     <div>
      @foreach ($comment as $cmt)
        <div style="color: red;">
          <img src="https://img.icons8.com/ios/40/000000/gender-neutral-user.png"<p style="width: 25px; height: 25px;">Tài Khoản: {{$cmt->user_name}}</p>
        </div>
        <img src="https://img.icons8.com/material-outlined/40/000000/comments.png" <p style=" margin-left: 50px; font-size: 14px; width: 25px; height: 25px;">  {{$cmt->detail}}</p>
        
       @endforeach
     </div>
  </body>

@endsection