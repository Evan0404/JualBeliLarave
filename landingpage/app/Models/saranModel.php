<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class saranModel extends Model
{
    public function alldata()
    {
      DB::table('saran')->get();
    }
    public function addData($data)
    {
      DB::table('saran')->insert($data);
    }
}
