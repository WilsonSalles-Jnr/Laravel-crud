<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex() {
        $usuario = auth()->user();
        return view('login', ['usuario' => $usuario]);
    }
}
