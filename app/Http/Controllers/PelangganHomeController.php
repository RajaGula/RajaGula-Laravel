<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class PelangganHomeController extends Controller
{
    public function index()
    {
        $produk = Produk::with(['kategori'])->paginate(5);

        return view('Pelanggan.page.home.home', compact('produk'));
    }

    public function view($id)
    {
        $kategori = kategori::all();

        $produk = produk::find($id);
        return view('Pelanggan.Page.detail.detail', compact('produk', 'kategori'));
    }
}
