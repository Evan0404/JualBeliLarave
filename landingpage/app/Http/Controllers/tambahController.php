<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tambahModel;

class tambahController extends Controller
{
    public function __construct()
	{
		$this ->tambahModel = new tambahModel();
    $this->middleware('auth');
	}

	public function index(){
        $data = [
            'produk' => $this -> tambahModel -> alldata()
        ];
        return view('tambah', $data);
    }
	public function insert()
    {
        $file = request()->gambar;
        $fileName = request()->nama . '.' . $file->extension();
        $file->move(public_path('gambar'), $fileName);

        $data=[
            'nama' => request()->nama,
            'deskripsi' => request()->deskripsi,
            'harga' => request()->harga,
            'kategori' => request()->kategori,
            'gambar' => $fileName
        ];
        $this->tambahModel->addData($data);
        return redirect()->route('tambah');
    }

}
