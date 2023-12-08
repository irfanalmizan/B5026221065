<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function indexbelanja()
	{
    	// mengambil data dari table nilai kuliah
		// $pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')
                ->get();

    	// mengirim data pegawai ke view index
		return view('indexbelanja',['keranjangbelanja' => $keranjangbelanja]);
	}

	// method untuk menampilkan view form tambah keranjangbelanja
	public function tambahbelanja()
	{
		// memanggil view tambah
		return view('tambahbelanja');
	}

	// method untuk insert data ke table keranjangbelanja
	public function storebelanja(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman belanja
		return redirect('/belanja');

	}

	public function hapusbelanja($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/belanja');
	}
}
