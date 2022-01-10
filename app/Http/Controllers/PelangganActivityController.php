<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganActivityController extends Controller
{
    public function index()
    {
        return view('Pelanggan.page.activity.activity');
    }
}
