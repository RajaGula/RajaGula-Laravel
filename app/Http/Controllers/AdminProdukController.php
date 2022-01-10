<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('Kategori.Kategori')->paginate(5);

        return view('Admin.Page.dataProduk.produk', compact('produk'));
    }

    public function create_view()
    {
        return view('Admin.Page.dataProduk.create');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'kategori_nama'            => 'required',
        ]);

        $produk = new produk;

        $produk->nama_kategori                = $request->kategori_nama;
        $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Tambah Kategori Berhasil']);
    }

    public function update_view($id)
    {
        $produk = produk::find($id);
        return view('Admin.Page.dataKategori.update', compact('kategori'));
    }

    public function update_process($id, Request $request)
    {
        $request->validate([
            'kategori_nama'            => 'required',
        ]);
        
        $produk = produk::find($id);

        $produk->nama_kategori                = $request->kategori_nama;
        $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Ubah Kategori Berhasil']);
    }

    public function delete($id)
    {
        $produk = produk::find($id);
        $kategori->delete();

        return redirect(route('produk.index'))->with(['success' => 'Delete Kategori Berhasil']);
    }
}
