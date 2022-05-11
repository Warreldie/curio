<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        return redirect('../');
    }
}
