<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DataController extends Controller
{
    function index($id)
    {
        $students = Student::where('semester_id', $id)->get();
        return view('data', ['id' => $id, 'students' => $students]);
    }
}
