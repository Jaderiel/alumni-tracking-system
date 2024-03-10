<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customAuthController extends Controller
{
    public function login() {
        return "Login";
    }

    public function registration() {
        return "Register";
    }
}
