<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tambahModel extends Model
{
    public function alldata()
    {
        DB::table('produk')->get();
    }
    public function addData($data)
    {
        DB::table('produk')->insert($data);
    }

}
