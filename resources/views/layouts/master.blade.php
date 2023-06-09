<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Certificados</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ComingSoon
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @yield('main')
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ComingSoon</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function() {
      // alert(1)
      $('#form-search').on('submit', function(e){
          e.preventDefault();
          
          $('#div-results').empty();
          // $('#div-results').loading({message: 'Cargando...'});
          // alert(1)
          // var loader = '<div class="col-md-12 bg"><div class="loader" id="loader-3"></div></div>'
          // $('#div-results').html(loader);
          $.post($('#form-search').attr('action'), $('#form-search').serialize(), function(res){
              $('#div-results').html(res);
          })
          .fail(function() {
              toastr.error('Ocurrió un error!', 'Oops!');
          })
          .always(function() {
              $('#div-results').loading('toggle');
              $('html, body').animate({
                  scrollTop: $("#div-results").offset().top - 70
              }, 500);
          });
      });
    });
    function codeVerification(id, phone)
    {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Codigo Enviado',
        showConfirmButton: false,
        timer: 1500
      })

      // var nombre = $('#name').val();
      var id = id;
      var phone = phone;
      var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
      var data={id:id,phone:phone,_token:token};
      $.ajax({
          type: "post",
          url: "{{route('certificate-code.phone')}}",
          data: data,
          success: function (msg) {
            // alert(1)
                  // alert("Se ha realizado el POST con exito "+msg);
                  // $("#codeVerification").attr("disabled", false)
                  // $("#codeVerification").on('paste', function(e){
                  //   e.preventDefault();
                  //   // alert('Esta acción está prohibida');
                  // })
          }
      });

      $('#div-results').empty();
      $('#ci').empty();
            
    }
  </script>

</body>

</html>