<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PelangganCartController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            return view('Pelanggan.page.cart.cart');
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
