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
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_kategori'           => 'required',
            'produk_detail'             => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $produk = new produk;

        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotoproduk/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $produk->foto_produk = $pathImg;
            }
            $produk->nama_produk         = $request->produk_nama;
            $produk->stok_produk         = $request->produk_stok;
            // $produk->id_kategori      = $request->produk_kategori;
            $produk->detail_produk       = $request->produk_detail;
            $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }

    public function update_view($id)
    {
        $produk = produk::find($id);
        return view('Admin.Page.dataProduk.update', compact('produk'));
    }

    public function update_process($id, Request $request)
    {
        $request->validate([
            'produk_nama'               => 'required',
            'produk_stok'               => 'required',
            'produk_kategori'           => 'required',
            'produk_detail'             => 'required',
        ]);
        
        $produk = produk::find($id);

        $produk->nama_produk         = $request->produk_nama;
        $produk->stok_produk         = $request->produk_stok;
        // $produk->id_kategori      = $request->produk_kategori;
        $produk->detail_produk       = $request->produk_detail;
        $produk->save();

        return redirect(route('produk.index'))->with(['success' => 'Ubah Produk Berhasil']);
    }

    public function delete($id)
    {
        $produk = produk::find($id);
        $produk->delete();

        return redirect(route('produk.index'))->with(['success' => 'Delete Produk Berhasil']);
    }
}