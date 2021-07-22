<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produkModel extends Model
{
  public function alldata()
  {
    return DB::table('produk')->get();
  }
  public function modalData($nama)
	{
		return DB::table('produk')->where('nama', $nama)->first();
	}
  public function adddata($data)
  {
      DB::table('order')->insert($data);
  }
}
