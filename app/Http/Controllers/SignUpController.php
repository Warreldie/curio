<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create(){
        return view('signup/index');
    }
    public function store(Request $request){
        // db insert
    }
}
