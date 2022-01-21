<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;
use App\Models\transaksi;

class AdminTransaksiController extends Controller
{
    public function index()
    {
        $trans = order::with(['user'])->paginate(5);


        return view('Admin.Page.dataTransaksi.transaksi', compact('trans'));
    }

    public function view($no_order)
    {
        $order = order::orderBy('created_at', 'desc')->get();

        $trans = transaksi::with(['produk'])->where('no_order', $no_order)->paginate(5);

        return view('Admin.Page.dataTransaksi.detail', compact('trans', 'order'));
    }
}
