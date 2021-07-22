<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderModel;

class orderController extends Controller
{
  public function __construct()
  {
    $this-> orderModel = new orderModel();
    $this->middleware('auth');
  }
  public function index()
  {
      $data=[
        'order' => $this-> orderModel->alldata()
      ];
      return view('orderan', $data);
  }
}
