<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Favorit;
use App\Models\cart;
use App\Models\transaksi;
use App\Models\order;
use Session;

class PelangganActivityController extends Controller
{
    public function index()
    {
        if(Session::has('user'))
        {
            $order = order::orderBy('created_at', 'desc')->get();
            
            $trans = transaksi::with(['produk'])->where('id_user', Auth::user()->id)->get();

            return view('Pelanggan.page.activity.activity', compact('trans', 'order'));
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
