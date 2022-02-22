<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writers = \DB::table('writers')->get();
        $data['writers'] = $writers;
        return view('writers/index', $data);
    }
    public function details($id){ 
        $writer = \App\Models\Writer::where('id', $id)->with('books')->first();

        $data['writer'] = $writer;
        return view('writers/details', $data);
    }
}
