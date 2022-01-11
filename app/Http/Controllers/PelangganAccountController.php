<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganAccountController extends Controller
{
    public function index()
    {
        return view('Pelanggan.page.account.account');
    }
}
