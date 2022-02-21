<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    function index($sem_id, $id)
    {
        return view('upload', ['id' => $id, 'sem_id' => $sem_id]);
    }

    function upload(Request $request, $sem_id, $id)
    {
        Excel::import(new StudentImport($id), $request->file('file'));
        return redirect('/data'.'/'.$sem_id.'/'.$id);
    }

    function download(){
        return Storage::download('public/template.xlsx');
    }
}
