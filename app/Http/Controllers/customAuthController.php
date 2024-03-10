<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ]);

        $users = new User();
        $users -> username = $request -> username;
        $users -> email = $request -> email;
        $users -> password = $request -> password;
        $res = $users -> save();

        if($res) {
            return back() -> with('success', 'you have registered successfully');
        } else {
            return back() -> with('fail', 'something wrong');
        }
    }
}
