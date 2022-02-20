<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;

class UploadController extends Controller
{
    function index($id)
    {
        return view('upload', ['id' => $id]);
    }

    function upload(Request $request, $id)
    {
        $file = $request->file;
        Excel::import(new StudentImport($id), "C:\Users\hasan\Desktop\\" . $file);
        return redirect('/data'.'/'.$id);
    }
}
