<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Writer;
use Illuminate\Support\Facades\Gate;

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
    public function create(){
        //echo \Auth::user()->id;
        if( ! Gate::allows('create-writer')){
            abort(403);
        }
        return view('writers/create');
    }
    public function store(Request $request){
        $writer = new Writer();
        $writer->name = $request->input('name');
        $writer->bio = $request->input('bio');
        $writer->save();

        $request->flash();
        $request->session()->flash('message', 'The writer was added');

        return redirect('writers/create');
    }
}
