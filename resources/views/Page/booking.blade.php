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
  
   <form method="POST" action="{{route('dattour',$toursct['id'])}}" >
 <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
 <div class="site-blocks-cover inner-page-cover" style="background-image: url(/booking_tour/public/source/images/{{$toursct['image_tour']}});" data-aos="fade" data-stellar-background-ratio="0.5">
       <div class="container">
         <div class="row align-items-center justify-content-center text-center">

           <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
             <h1 class="text-white font-weight-light">Get In Touch</h1>
             <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Contact</span></div>
             
           </div>
         </div>
       </div>
     </div>  
   </form>


    
    <div class="site-section bg-light" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-7" >

            

            <form action="{{route('dattour',$toursct['id'])}}" method="post" class="p-5 bg-white">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <div class="row form-group" style="margin-left: 100px;">
              <h3 style="color: red; ">THÔNG TIN TOUR: {{$toursct['name_tour']}}</h3>
                <table border="1">
                  <tr class="he_st_table">
                  <td class="we_st_table">Mã tour</td>
                    <td class="we_st_table">Ngày xuất hành</td>
                    <td class="we_st_table">Ngày về</td>
                    <td class="we_st_table">Giá tour</td>
                    <td class="we_st_table">Phương tiện</td>
                  </tr>
                  <tr class="he_st_table">
                    <td class="we_st_table">{{$toursct['id']}}</td>
                    <td class="we_st_table">{{$toursct['start_date']}}</td>
                    <td class="we_st_table">{{$toursct['end_date']}}</td>
                    <td class="we_st_table">{{$toursct['price_tour']}}</td>
                    <td class="we_st_table">{{$pt['details']}}</td>
                    
                  </tr>
                </table>

              </div>
              </br>

             <div>
              <h3 style="color: red; ">THÔNG TIN LIÊN LẠC</h3>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Full Name(*)</label>
                  <input type="text" name="name" id="fullname" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Email(*)</label> 
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email...">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="address">Address(*)</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="Address...">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="subject">Phone(*)</label> 
                  <input type="text" name="phone_number" id="phone" class="form-control" placeholder="Phone...">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3 mb-3 mb-md-0">
                  <label class="text-black" for="address" min="0" >Người lớn(*)</label>
                  <input type="number" name="adult" id="nguoilon" class="form-control" placeholder="0">
                </div>
                <div class="col-md-3">
                  <label class="text-black" for="subject"  min="0">Trẻ em(*)</label> 
                  <input type="number" name="child" id="treem" class="form-control" placeholder="0">
                </div>
                <div class="col-md-3">
                  <label class="text-black" for="subject" min="0">Em bé(*)</label> 
                  <input type="number" name="baby" id="embe" class="form-control" placeholder="0">
                </div>
                 <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="note">Yêu cầu</label> 
                  <textarea name="requirement" id="note" cols="30" rows="2" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit"  value="ĐẶT TOUR" class="btn btn-primary py-2 px-4 text-white" style="margin-left: 400px">
                </div>
              </div>
             
              </div>


  
            </form>



         
      </div>
         
      </div>
    </div>
  </body>
@endsection