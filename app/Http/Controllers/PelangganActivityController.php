<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PelangganActivityController extends Controller
{
    public function index()
    {
        if(Session::has('user')){
            return view('Pelanggan.page.activity.activity');
        }
        else{
            return redirect()->route('home.index');
        }
    }
}
