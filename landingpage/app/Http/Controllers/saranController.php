<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saranModel;

class saranController extends Controller
{
    public function __construct()
    {
      $this -> saranModel = new saranModel();
    }
    public function index()
    {
      $data = [
        'saran' => $this -> saranModel -> alldata()
      ];
      return view('saran',$data);
    }
    public function insert()
    {
      $data = [
        'email' => request()->email,
        'saran' => request()->saran,
        'nama' => request()->nama
      ];
      $this ->saranModel->addData($data);
      return redirect()-> route('saran');
    }
}
