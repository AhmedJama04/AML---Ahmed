<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserVerificationController extends Controller
{

    public function VerificationView()
    {
        return view('user-verification');
    }

    public function Submit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['failed' => 'Invalid credentials']);
        }
        ;
    }
}
