<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
use App\Models\review;
use App\Models\order;
use App\Models\transaksi;

use Session;

class PelangganReviewController extends Controller
{
    public function index($id)
    {
        if(Session::has('user')){
            $order = order::findOrFail($id);

            $trans = transaksi::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->where('no_order', $order->no_order)
            ->paginate(10);

            return view('Pelanggan.page.review.review', compact('trans', 'order'));
        }
        else{
            return redirect()->route('home.index');
        }
    }

    public function create($id, Request $request)
    {
        if(Session::has('user')){
            $user_id = Auth::user()->id;

            $request->validate([
                'review'            => 'required',
                'no_order'          => 'required',
            ]);

            $trans = transaksi::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->where('no_order', $request->no_order) 
            ->get();

            foreach($trans as $ts)
            {
                $review = new review;
        
                $review->komentar           = $request->review;
                $review->id_produk          = $ts->id_produk;
                $review->id_user            = $user_id;
                $review->save();
            }
            return redirect(route('home.index'))->with(['success' => 'Tambah Kategori Berhasil']);
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
