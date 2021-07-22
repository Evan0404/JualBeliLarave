@extends('layout.atemplate')
@section('content')

    <br><br><br><br>
    <center>
        <form action="/tambah/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4" style="width:280px;">
                <label for="exampleFormControlInput1" class="form-label float-start">Nama Poduk</label>
                <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-4" style="width:280px;">
                <label for="exampleFormControlInput1" class="form-label float-start">Harga</label>
                <input name="harga" type="number" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-4" style="width:280px;" >
                <label for="exampleFormControlTextarea1" class="form-label float-start">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="mb-4" style="width:280px;">
                <label for="exampleFormControlSelect1" class="form-label float-start">Kategori</label><br>
                <select name="kategori" id="exampleFormControlSelect1" class="form-select  mb-4 form-control" style="width:280px;" aria-label="Default select example">
                    <option selected value="4">RadioControl</option>
                    <option value="1">Router</option>
                    <option value="2">Acces Point</option>
                    <option value="3">Switch/Hub</option>
                </select>
            </div>
            <div class="mb-4" style="width:280px;" >
                <label for="formFile" class="form-label float-start">Foto Produk</label>
                <input name="gambar" class="form-control" type="file" id="formFile"><br>
                <button  class="btn btn-primary float-end" style=" width:150px;">Tambahkan</button>
            </div>
        </form>
    </center>
    <br><br>
@endsection
