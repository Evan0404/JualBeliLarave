<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanModel;

class pesanController extends Controller
{
    public function __construct()
    {
      $this-> pesanModel = new pesanModel();
      $this->middleware('auth');
    }
    public function index()
    {
      $data=[
        'pesan' => $this-> pesanModel->alldata()
      ];
      return view('pesan', $data);
    }
}
