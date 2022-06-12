<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SignUpController extends Controller
{
    public function create(){
        return view('signup/index');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:200',
            'password' => 'required',
            'email' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->save();

        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $id = Auth::id();
            $user = \DB::table("users")->where("id", $id)->first();
            $data['users'] = $user;
            return view('/index', $data);
        };
    }
}
