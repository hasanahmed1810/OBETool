<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DataController extends Controller
{
    function index($sem_id, $id)
    {
        $students = Student::where('subject_id', $id)->get();
        return view('data', ['id' => $id, 'sem_id' => $sem_id, 'students' => $students]);
    }
}
