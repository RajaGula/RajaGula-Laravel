<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            return redirect('Admin.Page.dashboard.dashboard');
        }
        return view('Admin.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'name'      => 'required',
                'password'  => 'required',
            ]);

        $kredensil = $request->only('name','password');

            if (Auth::attempt($kredensil)) {
                    return redirect('/admin/dashboard');
            }else{
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/login');
            }
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

}