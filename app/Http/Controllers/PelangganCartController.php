<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganCartController extends Controller
{
    public function index()
    {
        return view('Pelanggan.page.cart.cart');
    }
}
