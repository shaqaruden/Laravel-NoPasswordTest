<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ShopfloorController extends Controller
{
    public function index() {
        $user = Auth::user();

        return view('shopfloor.index')->with('user', $user);
    }
}
