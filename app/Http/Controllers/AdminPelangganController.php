<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggan = pelanggan::all();

        return view('Admin.Page.dataPelanggan.pelanggan', compact('pelanggan'));
    }

    public function create_view()
    {
        return view('Admin.Page.dataPelanggan.create');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            'pelanggan_nama'            => 'required',
            'pelanggan_email'           => 'required',
            'pelanggan_username'        => 'required',
            'pelanggan_password'        => 'required',
            'pelanggan_confpassword'    => 'required',
            'pelanggan_nomor'           => 'required',
            'pelanggan_lahir'           => 'required',
            'pelanggan_alamat'          => 'required',
        ]);

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $pelanggan = new pelanggan;

        
        if ($request->pelanggan_password == $request->pelanggan_confpassword){
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotopelanggan/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $pelanggan->foto = $pathImg;
            }
            $pelanggan->nama                = $request->pelanggan_nama;
            $pelanggan->email               = $request->pelanggan_email;
            $pelanggan->username            = $request->pelanggan_username;
            $pelanggan->password            = $request->pelanggan_password;
            $pelanggan->tanggal_lahir       = $request->pelanggan_lahir;
            $pelanggan->alamat              = $request->pelanggan_alamat;
            $pelanggan->nohp               = $request->pelanggan_nomor;
            $pelanggan->save();
        }
        else{
            return redirect(route('pelanggan.create'))->with(['warning' => 'Confirm Password Tidak Sesuai']);
        }

        return redirect(route('pelanggan.index'))->with(['success' => 'Tambah Pelanggan Berhasil']);
    }
    
    public function delete($id)
    {
        $pelanggan = pelanggan::find($id);
        $pelanggan->delete();
        return redirect(route('pelanggan.index'))->with(['success' => 'Hapus Pelanggan Berhasil']);
    }
}
