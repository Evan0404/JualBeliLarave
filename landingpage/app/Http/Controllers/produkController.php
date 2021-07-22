<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produkModel;
use App\Models\orderModel;

class produkController extends Controller
{
  public function __construct()
  {
    $this ->   produkModel = new produkModel();
  }

  public function index()
  {
    $data=[
      'produk' => $this-> produkModel->alldata()
    ];
    return view('produk', $data);
  }
  public function modal($nama)
    {

        $data = [
            'produk' => $this-> produkModel->modalData($nama),

        ];

      return view('beli', $data);
    }
    public function insert()
      {
          $data=[
              'nama_lengkap' => request()->namalengkap,
              'email' => request()->email,
              'nama_barang' => request()->namabarang,
              'nomor_hp' => request()->no_hp,
              'catatan_penjual' => request()->catatan_penjual,
              'harga' => request()->harga,
              'lat' => request()->lat,
              'lng' => request()->lng
          ];
          $this->produkModel->adddata($data);
          return redirect()->route('tambah');
      }
}
