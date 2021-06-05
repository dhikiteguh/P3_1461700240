<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table buku
    	$buku = DB::table('buku')->get();
 
    	// mengirim data buku ke view index
    	return view('index',['buku' => $buku]);
 
    }
}
