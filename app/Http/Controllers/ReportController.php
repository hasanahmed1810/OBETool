<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class ReportController extends Controller
{
    public function index(Request $request, $sem_id, $id)
    {
        $column1 = $request->clo1;
        $column2 = $request->clo2;
        $column3 = $request->clo3;
        $column4 = $request->clo4;
        $students = Student::where('subject_id', $id)->get();
        return view('report', ['id' => $id, 'sem_id' => $sem_id, 'students' => $students, 'column1' => $column1, 'column2' => $column2, 'column3' => $column3, 'column4' => $column4]);
    }
}
