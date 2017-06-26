<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthenticatesUser;
use Auth;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function postLogin(AuthenticatesUser $auth) {
        $auth->validation();
        $auth->login();

        return redirect('/');
    }

    public function logout() {
        Auth::logout();

        return redirect('login');
    }
}
