<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Favorit;
use App\Models\cart;
use App\Models\transaksi;
use Session;

class PelangganTransaksiController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            $trans = transaksi::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);

            return view('Pelanggan.page.transaksi.checkout', compact('trans'));
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
