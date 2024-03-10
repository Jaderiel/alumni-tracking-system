<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customAuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }

    public function registration() {
        return view("auth.registration");
    }

    public function registerUser(Request $request) {
        $request -> validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    }
}
