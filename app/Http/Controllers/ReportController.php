<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Semester;



class ReportController extends Controller
{
    public function index(Request $request, $sem_id, $id)
    {
        $semester_name = Semester::find($sem_id)->name;
        $subject_name = Subject::find($id)->name;
        $column1 = $request->clo1;
        $column2 = $request->clo2;
        $column3 = $request->clo3;
        $column4 = $request->clo4;
        $plevel1 = $request->plvl1;
        $plevel2 = $request->plvl2;
        $plevel3 = $request->plvl3;
        $plevel4 = $request->plvl4;

        $students = Student::where('subject_id', $id)->get();
        return view('report', ['id' => $id, 'sem_id' => $sem_id, 'students' => $students, 'column1' => $column1, 'column2' => $column2, 'column3' => $column3, 'column4' => $column4, 'semester_name' => $semester_name, 'subject_name' => $subject_name, 'plevel1' => $plevel1, 'plevel2' => $plevel2, 'plevel3' => $plevel3, 'plevel4' => $plevel4]);
    }
}
