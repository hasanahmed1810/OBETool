<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Semester;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentExport;

class ReportController extends Controller
{
    public function index(Request $request, $sem_id, $id)
    {
        $id = $id;
        $sem_id = $sem_id;
        $semester_name = Semester::find($sem_id)->name;
        $subject_name = Subject::find($id)->name;
        $students = Student::where('subject_id', $id)->get();
        $column1 = $request->clo1;
        $column2 = $request->clo2;
        $column3 = $request->clo3;
        $column4 = $request->clo4;
        $plevel1 = $request->plvl1;
        $plevel2 = $request->plvl2;
        $plevel3 = $request->plvl3;
        $plevel4 = $request->plvl4;
        $bt1 = $request->bt1;
        $bt2 = $request->bt2;
        $bt3 = $request->bt3;
        $bt4 = $request->bt4;
        $weightage1 = $request->weightage1;
        $weightage2 = $request->weightage2;
        $weightage3 = $request->weightage3;
        $weightage4 = $request->weightage4;

        Session::put('subject_id', $id);
        Session::put('sem_id', $sem_id);
        Session::put('students', $students);
        Session::put('column1', $column1);
        Session::put('column2', $column2);
        Session::put('column3', $column3);
        Session::put('column4', $column4);
        Session::put('semester_name', $semester_name);
        Session::put('subject_name', $subject_name);
        Session::put('plevel1', $plevel1);
        Session::put('plevel2', $plevel2);
        Session::put('plevel3', $plevel3);
        Session::put('plevel4', $plevel4);
        Session::put('bt1', $bt1);
        Session::put('bt2', $bt2);
        Session::put('bt3', $bt3);
        Session::put('bt4', $bt4);
        Session::put('weightage1', $weightage1);
        Session::put('weightage2', $weightage2);
        Session::put('weightage3', $weightage3);
        Session::put('weightage4', $weightage4);

        return view('report', ['id' => $id, 'sem_id' => $sem_id, 'students' => $students, 'column1' => $column1, 'column2' => $column2, 'column3' => $column3, 'column4' => $column4, 'semester_name' => $semester_name, 'subject_name' => $subject_name, 'plevel1' => $plevel1, 'plevel2' => $plevel2, 'plevel3' => $plevel3, 'plevel4' => $plevel4, 'bt1' => $bt1, 'bt2' => $bt2, 'bt3' => $bt3, 'bt4' => $bt4, 'weightage1' => $weightage1, 'weightage2' => $weightage2, 'weightage3' => $weightage3, 'weightage4' => $weightage4]);
    }

    public function download() 
    {
        return Excel::download(new StudentExport, 'students.xlsx');
    }
}
