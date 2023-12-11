<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KertasController extends Controller{
    public function indexkertas()
	{
    	// mengambil data dari table kertashvs
		// $kertashvs = DB::table('kertashvs')->get();
        $kertashvs = DB::table('kertashvs')
                ->get();

    	// mengirim data kertashvs ke view index
		return view('indexkertas',['kertashvs' => $kertashvs]);
	}
    	// method untuk menampilkan view form tambah pegawai
	public function tambahkertas()
	{
		// memanggil view tambah
		return view('tambahkertas');
	}

	// method untuk insert data ke table pegawai
	public function storekertas(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kertashvs')->insert([
			'kodekertashvs' => $request->kode,
			'merkkertashvs' => $request->merk,
			'stockkertashvs' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');

	}

	// method untuk edit data kertashvs
	public function editkertas($id)
	{
		// mengambil data kertashvs berdasarkan id yang dipilih
		$kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
		// passing data kertashvs yang didapat ke view edit.blade.php
		return view('editkertas',['kertashvs' => $kertashvs]);
	}

	public function displaykertas($id)
	{
		// mengambil data kertashvs berdasarkan id yang dipilih
		$kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
		// passing data kertashvs yang didapat ke view display.blade.php
		return view('displaykertas',['kertashvs' => $kertashvs]);
	}

	// updatekertas data pegawai
	public function updatekertas(Request $request)
	{
		// updatekertas data pegawai
		DB::table('kertashvs')->where('kodekertashvs',$request->id)->update([
			'merkkertashvs' => $request->merk,
			'stockkertashvs' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');
	}

	// method untuk hapus data kertashvs
	public function hapuskertas($id)
	{
		// menghapus data kertashvs berdasarkan id yang dipilih
		DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

		// alihkan halaman ke halaman kertashvs
		return redirect('/kertashvs');
	}

    public function carikertas(Request $request)
	{
		// menangkap data pencarian
		$carikertas = $request->carikertas;

    		// mengambil data dari table kertashvs sesuai pencarikertasan data
		$kertashvs = DB::table('kertashvs')
                ->where('merkkertashvs','like',"%".$carikertas."%")
                ->get();

    		// mengirim data kertashvs ke view index
		return view('indexkertas',['kertashvs' => $kertashvs, 'carikertas' => $carikertas]);

	}
}
