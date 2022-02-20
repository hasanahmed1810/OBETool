<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index($sem_id, $id)
    {
        return view('report', ['sem_id' => $sem_id, 'id' => $id]);
    }
}
