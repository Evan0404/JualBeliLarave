<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexModel;

class indexController extends Controller
{
  public function __construct()
  {
    $this ->   indexModel = new indexModel();
  }

  public function index()
  {
    $data = [
      'sekilasProduk' => $this -> indexModel->alldata()
    ];
    return view('index', $data);
  }

}
