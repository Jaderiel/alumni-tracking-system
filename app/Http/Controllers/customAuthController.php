<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

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
        $users -> password = Hash::make($request -> password);
        $res = $users -> save();

        if($res) {
            return back() -> with('success', 'you have registered successfully');
        } else {
            return back() -> with('fail', 'something wrong');
        }
    }

    public function loginUser(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user) {
            if (Hash::check($request->password, $user->password)) {
                $request -> session() -> put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not matched');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function dashboard() {
        return "Welcome to Dashboard";
    }

    public function logins() {
        return view("auth.logins");
    }
}
