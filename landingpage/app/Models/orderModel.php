<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class orderModel extends Model
{
  public function alldata()
  {
    return DB::table('order')->get();
  }
}
