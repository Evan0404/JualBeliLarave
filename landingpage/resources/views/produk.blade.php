@extends('layout/template')
@section('content')

<br><br>
  <section id="produk" class="portfolio">
      <div class="section-title">
          <h2>Product</h2>
      </div>
      <br>
      <center>
              <div class=" row row-cols-2 row-cols-md-3 g-4 " data-aos="fade-up" data-aos-delay="400">
                <?php foreach ($produk as $data): ?>
                  <center>
                    <div class="col portfolio-item filter-{{$data -> kategori}}">
                      <div class="card">
                        <center>
                          <img src="{{url('gambar/'.$data -> gambar) }}" style="max-width:270px; height:auto;;" class="card-img-top" alt="...">
                        </center>
                        <div class="card-footer bg-primary">
                          <a href="/produk/beli/{{$data -> nama}}" class="link-light shadow-sm p-3 mb-5">
                            <h5 class="card-title">{{$data -> nama}}</h5>
                            <p class="card-text">Rp {{$data -> harga}},00</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </center>
                <?php endforeach; ?>
              </div>
      </center>
  </section>

@endsection
