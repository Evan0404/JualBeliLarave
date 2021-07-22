@extends('layout.atemplate')
@section('content')
<br><br><br><br>
<!-- ======= Testimonials Section ======= -->

 <div class="section-title" data-aos="fade-up">
   <h2>Saran</h2>
   <p>Mengandung Bahasa Yang Dapat Membuat Mental Anda Down</p>
 </div>

<center>
  <div class="card" data-aos="fade-up" style="width:97%;">
    <div class=" row row-cols-1 row-cols-md-2 g-4" data-aos="fade-up">
        <?php foreach ($pesan as $data): ?>
          <!-- <div class="card mb-10">
            <div class="card-header">
              <h5 align="justify" class="mb-0">{{$data -> nama}}</h5>
              <small align="justify" class="text-muted float-start">
                {{$data -> email}}
              </small>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p align="left">{{$data -> saran}}</p>
              </blockquote>
            </div>
          </div> -->

            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">{{$data -> nama}}</h5>
                  <small class="mb-100 fw-light">{{$data -> email}}</small>
                  <p class="card-text">{{$data -> saran}}</p>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</center>
@endsection
