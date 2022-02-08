<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(){
        return view('upload');
    }

    function upload(Request $request){
        dd($request->file);
    }
}
