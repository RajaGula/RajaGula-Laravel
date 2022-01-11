<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganHomeController extends Controller
{
    public function index()
    {
        return view('Pelanggan.page.home.home');
    }
}
