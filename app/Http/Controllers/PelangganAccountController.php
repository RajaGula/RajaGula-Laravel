<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Session;

class PelangganAccountController extends Controller
{
    public function index()
    {   
        if(Session::has('user')){
            $account = user::where('id', Auth::user()->id)->firstOrFail();
            
            return view('Pelanggan.page.account.account', compact('account'));
        }
        else{
            return redirect()->route('home.index');
        }
    }
}