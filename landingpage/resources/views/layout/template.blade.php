
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>IntHome Media</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('Vesperr')}}/assets/img/favicon.png" rel="icon">
<link href="{{asset('Vesperr')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('Vesperr')}}/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="{{asset('Vesperr')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('Vesperr')}}/assets/css/style.css" rel="stylesheet">

<!-- =======================================================
* Template Name: Vesperr - v4.3.0
* Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
  @include('layout.nav')
  @yield('content')

<!-- ======= Footer ======= -->
<footer id="footer"class="bg-primary text-light ">
  <div class="container">
    <iv class="row d-flex align-items-center">
      <div class="col-lg-12 text-lg-left text-center">
        <div class="copyright">
          &copy; Copyright <strong>SCA46</strong>. All Rights Reserved
        </div>
        <div class="credits text-light">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
          Designed by <a class="link-light" href="https://lantunanpagi.blogspot.com/">Stevanus</a>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Vesperr')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/purecounter/purecounter.js"></script>
<script src="{{asset('Vesperr')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// variabel global marker
var marker;

function taruhMarker(peta, posisiTitik){

  if( marker ){
    // pindahkan marker
    marker.setPosition(posisiTitik);
  } else {
    // buat marker baru
    marker = new google.maps.Marker({
      position: posisiTitik,
      map: peta
    });
  }

   // isi nilai koordinat ke form
  document.getElementById("lat").value = posisiTitik.lat();
  document.getElementById("lng").value = posisiTitik.lng();

}

function initialize() {
var propertiPeta = {
  center:new google.maps.LatLng(-8.273494, 113.308660),
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
};

var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

// even listner ketika peta diklik
google.maps.event.addListener(peta, 'click', function(event) {
  taruhMarker(this, event.latLng);
});

}


// event jendela di-load
google.maps.event.addDomListener(window, 'load', initialize);


</script>

<!-- Template Main JS File -->
<script src="{{asset('Vesperr')}}/assets/js/main.js"></script>

</body>

</html>
