<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;

class UploadController extends Controller
{
    function index($sem_id, $id)
    {
        return view('upload', ['id' => $id, 'sem_id' => $sem_id]);
    }

    function upload(Request $request, $sem_id, $id)
    {
        $file = $request->file;
        Excel::import(new StudentImport($id), "C:\Users\hasan\Desktop\\" . $file);
        return redirect('/data'.'/'.$sem_id.'/'.$id);
    }
}
