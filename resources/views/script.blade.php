  <script src="/Booking_tour/public/source/js/jquery-3.3.1.min.js"></script>
  <script src="/Booking_tour/public/source/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/Booking_tour/public/source/js/jquery-ui.js"></script>
  <script src="/Booking_tour/public/source/js/popper.min.js"></script>
  <script src="/Booking_tour/public/source/js/bootstrap.min.js"></script>
  <script src="/Booking_tour/public/source/js/owl.carousel.min.js"></script>
  <script src="/Booking_tour/public/source/js/jquery.stellar.min.js"></script>
  <script src="/Booking_tour/public/source/js/jquery.countdown.min.js"></script>
  <script src="/Booking_tour/public/source/js/jquery.magnific-popup.min.js"></script>
  <script src="/Booking_tour/public/source/js/bootstrap-datepicker.min.js"></script>
  <script src="/Booking_tour/public/source/js/aos.js"></script>

  <script src="/Booking_tour/public/source/js/main.js"></script>
  <script>
    $(function() {
  $('#dang-nhap').click(function(e) {
    e.preventDefault();
     $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
});
    $.ajax({
      'url' : 'dangnhap',
      'data': {
        'email' : $('#email').val(),
        'password' : $('#password').val()
      },
      'type' : 'POST',
      success: function (data) {
       
       //Kiểm tra có lỗi hay không
      if (data.error != false) { 
        
      $('.error').hide();
        if (data.message.email != undefined) {
      $('.errorEmail').show().text(data.message.email[0]);
      }
        if (data.message.password != undefined) {
      $('.errorPassword').show().text(data.message.password[0]);
      }
        if (data.message.errorlogin != undefined) {
        $('.errorLogin').show().text(data.message.errorlogin[0]);
        }
      } else {
        if(data.role=="admin"){
          window.location.href = "indexAdmin";
        }else{
        window.location.href = "index";
        }
      }
      }
    });
  })
});
  </script>
