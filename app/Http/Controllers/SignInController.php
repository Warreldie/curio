<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signin(){
        return view('signin/index');
    }
    public function try(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect('../');
        }
        else{
            $error = "Login Failed";
            $data['errors'] = $error;
            return view('signin/index', $data);
        }
    }
}
