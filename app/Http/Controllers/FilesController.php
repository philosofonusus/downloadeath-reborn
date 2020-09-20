<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function upload(Request $request){
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('public', $fileName);
        return $path;
    }
    public function list(){
        $ls = Storage::disk('local')->files('public');
        return view('files', ['files' => $ls]);
    }
}
