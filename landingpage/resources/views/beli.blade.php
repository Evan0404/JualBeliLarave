@extends('layout.template')
@section('content')
<br><br><br><br>
<center>
    <div class="card-body shadow-sm p-3 mb-5 bg-body rounded" style="width:95%; max-height:380px;">
    <center>
      <img src="{{url('gambar/'.$produk -> gambar) }}"  alt="" style="max-width:330px; min-width:280px;" >
      <h3>{{ $produk -> nama}}</h3>
    </center>
  </div>
</center><br>
<div class="container" style="">
  <h1>{{$produk -> nama}}</h1>
  <h5 class="mb-0">IntHome Media</h5>
  <small class="fw-lighter">Tunjungrejo, Kebonsari, Kebonsari, Yosowilangun Kidul, Yosowilangun, Kabupaten Lumajang, Jawa Timur 67382</small><br><br>
  <h6 class="mb-0 col-md-12">Deskripsi :</h6>
  <p class="mb-0 col-md-12">{{$produk -> deskripsi}}</p>
  <h6 class="mb-0">Harga : </h6>
    <h7>Rp {{$produk -> harga}},00</h7>
    <button style="margin-left:10px;" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success" name="button"><i class="bi bi-cart-check-fill"></i>Order</button>
</div>
<br><br><br>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Order {{$produk -> nama}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="/produk/beli/{nama}/insert" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="example@gmail.com">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Nama Lengkap</label>
            <input type="text" name="namalengkap" class="form-control" id="inputAddress">
          </div>

            <textarea type="text" name="namabarang" class="form-control disabled" rows="1" id="inputAddress"  hidden>{{$produk->nama}}</textarea>


            <textarea type="text" name="harga" class="form-control disabled" rows="1" id="inputAddress"  hidden>{{$produk->harga}}</textarea>

          <div class="col-12">
            <label for="inputAddress4" class="form-label mb-0">Nomor Hp/WA</label><br><p class="mb-0 fw-light ">Awali dengan 62</p>
            <input type="number" name="no_hp" class="form-control" id="inputAddress4" placeholder="628**********">
          </div>
          <div class="form-floating col-12">
            <textarea name="catatan_penjual" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" ></textarea>
            <label for="floatingTextarea2">Pesan Untuk Penjual</label>
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Alamat Lengkap</label>
              <div id="googleMap" style="width:100%;height:300px;"></div>
            <input type="text" id="lat" name="lat" value="">
            <input type="text" id="lng" name="lng" value="">
          </div>
      </div>
        <div class="modal-footer">
          <button  class="btn btn-primary">Bungkus</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
