<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlmawarController extends Controller
{
	//isi controller
	public function login()
	{
		//mengambil data dari table akun
		$akun = DB::table('akun')->get();

		//mengirim data pegawai ke view index
		return view('dashboard',['akun'=> $akun]);
	}
}