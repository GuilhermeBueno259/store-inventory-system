<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller as BaseController;

class LoginController extends BaseController {
    public function authenticate(Request $request) {
        return "here";
        // $credentials = $request->validate([
        //     "email" => ["required", "email"],
        //     "password" => ["required"],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended("dashboard");
        // }

        // return back()->withErrors([
        //     "email" => "The provided credentials do not match our records.",
        // ])->onlyInput("email");
    }
}
