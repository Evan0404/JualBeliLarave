@extends('layout.atemplate')
@section('content')
  <br><br><br>
  <center>
    <div class="card card-body table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Tanggal Upload</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($listProduk as $data): ?>
            <tr>
              <td>{{$data -> nama}}</td>
              <td>Rp {{$data -> harga}},00</td>
              <td>{{$data -> uploadedAt}}</td>
              <td>
                <a href="/dashboard/detail">
                  <button type="button" class="btn btn-success">Detail</button>
                </a>
                <a href="/dashboard/edit">
                  <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </center>
  <br><br><br><br><br><br><br>
@endsection
