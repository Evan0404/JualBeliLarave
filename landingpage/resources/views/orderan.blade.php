@extends('layout.atemplate')
@section('content')
<br><br><br><br>
<div class="card card-body table-responsive">
  <h3 class="card-title">Daftar Order</h3>
  <table class="table table-primary table-striped">
    <thead>
      <tr>
        <th scope="col">Nama Barang</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Harga</th>
        <th scope="col">Email</th>
        <th scope="col">no.Hp</th>
        <th scope="col">Catatan</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Tanggal Order</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($order as $data): ?>
        <tr>
          <th>{{$data -> nama_barang}}</th>
          <td>{{$data -> nama_lengkap}}</td>
          <td>{{$data -> harga}}</td>
          <td>{{$data -> email}}</td>
          <th>{{$data -> nomor_hp}}</th>
          <td>{{$data -> catatan_penjual}}</td>
          <td>{{$data -> lat}}, {{$data -> lng}}</td>
          <td>{{$data -> orderAt}}</td>
          <td>
            <button type="button" class="btn btn-primary" style="width:90px;">Tandai</button>
            <a href="https://api.whatsapp.com/send?phone=62{{$data -> nomor_hp}}">
              <button type="button" href="https://api.whatsapp.com/send?phone={{$data -> nomor_hp}}" class="btn btn-success">Hubungi</button>
            </a>
            <button type="button" class="btn btn-danger" style="width:90px;">Hapus</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
@endsection
