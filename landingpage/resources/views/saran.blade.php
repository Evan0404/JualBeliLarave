@extends('layout.template')
@section('content')
<br><br><br><br>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.4859483647215!2d113.30690001436216!3d-8.273766485455504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd663473c1489e5%3A0x59dcb252b20dd506!2sGreja%20Kristen%20Jawi%20Wetan%20GKJW%20Tunjungrejo!5e1!3m2!1sen!2sid!4v1626344972495!5m2!1sen!2sid" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-youtube"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="/contact/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
            </div><br>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div><br>
            <div class="form-group">
              <textarea class="form-control" name="saran" rows="5" placeholder="Message" required></textarea>
            </div><br>
            <div class="text-center">
              <button type="submit" class="float-end btn btn-primary">KIRIM</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
<br>
@endsection
