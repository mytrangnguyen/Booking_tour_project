@extends('master')  <!-- kế thừa -->
@section('content')  <!-- gọi lại phần đã cắt --> 
  <body ">
    <style type="text/css">
      table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
    </style>
  <form method="POST" action="#" >
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="site-blocks-cover inner-page-cover" style="background-image: url(/booking_tour/public/source/images/bien.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
             
            </div>
          </div>
        </div>
      </div>  
    </form>
    <div class="site-section bg-light" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-7" >

            

            <form action="#" method="post" class="p-5 bg-white">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <div class="row form-group" style="margin-left: 100px;">
              <h3 style="color: red; ">THÔNG TIN ĐẶT TOUR</h3>
                <table border="1">
                  <tr class="he_st_table">
                  <td class="we_st_table">Mã tour</td>
                  <td class="we_st_table">Tên tour</td>
                  <td class="we_st_table">Ngày bắt đầu</td>
                  <td class="we_st_table">Ngày kết thúc</td>
                    <td class="we_st_table">Người lớn</td>
                    <td class="we_st_table">Trẻ em</td>
                    <td class="we_st_table">Baby</td>
                    <td class="we_st_table">Tổng tiền</td>
                  </tr>
                  <tr class="he_st_table">
                    <td class="we_st_table">{{$detail->id_tour}}</td>
                    @foreach($tours as $tour)
                      @if($detail->id_tour == $tour->id)
                        <td class="we_st_table">{{$tour->name_tour}}</td>
                        <td class="we_st_table">{{$tour->start_date}}</td>
                        <td class="we_st_table">{{$tour->end_date}}</td>
                      @endif
                    @endforeach
                    <td class="we_st_table">{{$detail->adult}}</td>
                    <td class="we_st_table">{{$detail->child}}</td>
                    <td class="we_st_table">{{$detail->baby}}</td>
                    <td class="we_st_table">{{$detail->amount}}</td>
                    <td class="we_st_table">
                      <a class="btn btn-danger" href="{{url('xoaDetailBook',$detail->id_detail)}}">Hủy tour</a>
                    </td>
                    <!-- <td class="we_st_table"></td> -->
                    
                  </tr>
                </table>

              </div>
              </br>

             <div>
              </div>
</form>
         
      </div>
    </div>
  </body>
@endsection