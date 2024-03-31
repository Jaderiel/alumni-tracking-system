<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;


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
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'course' => 'required',
            'batch' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
        ]);

        $users = new User();
        $users -> firstName = $request -> firstName;
        $users -> middleName = $request -> middleName;
        $users -> lastName = $request -> lastName;
        $users -> course = $request -> course;
        $users -> batch = $request -> batch;
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
            'username' => 'required',
            'password' => 'required|min:5|max:12',
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user) {
            if (Hash::check($request->password, $user->password)) {
                $request -> session() -> put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not matched');
            }
        } else {
            return back()->with('fail', 'This user is not registered.');
        }
    }

    public function dashboard() {
        return view("pages.dashboard");
    }

    public function logins() {
        return view("auth.logins");
    }

    public function alumniList() {
        return view("pages.alumni-list");
    }

    public function events() {
        return view("pages.events");
    }

    public function profile() {
        return view("pages.profile");
    }

    public function gallery() {
        return view("pages.gallery");
    }

    public function logoutUser() {
        Auth::logout();

        return redirect()->route('logins');
    }
}
