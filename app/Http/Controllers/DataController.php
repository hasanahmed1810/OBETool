<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Semester;


class DataController extends Controller
{
    function index($sem_id, $id)
    {
        $semester_name = Semester::find($sem_id)->name;
        $subject_name = Subject::find($id)->name;
        $students = Student::where('subject_id', $id)->get();
        return view('data', ['id' => $id, 'sem_id' => $sem_id, 'students' => $students, 'subject_name' => $subject_name, 'semester_name' => $semester_name]);
    }

    function store(Request $request, $subj_id){
        $student = new Student;
        $student->subject_id = $subj_id;
        $student->cms_id = $request->cms;
        $student->name = $request->name;
        $student->clo1 = $request->clo1;
        $student->clo2 = $request->clo2;
        $student->clo3 = $request->clo3;
        $student->clo4 = $request->clo4;
        $student->save();
        return back();
    }

    function destroy($id){
        Student::destroy($id);
        return back();
    }
}
