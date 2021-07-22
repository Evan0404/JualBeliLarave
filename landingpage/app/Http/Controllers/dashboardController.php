<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboardModel;

class dashboardController extends Controller
{
    public function __construct()
    {
      $this ->   dashboardModel = new dashboardModel();
      $this->middleware('auth');
    }

    public function index()
    {
      $data = [
        'listProduk' => $this -> dashboardModel -> alldata()
      ];
      return view('dashboard', $data);
    }
}
