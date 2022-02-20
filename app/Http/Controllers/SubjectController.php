<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;

class SubjectController extends Controller
{
    public function index($id){
        $subjects = Subject::where('semester_id', $id)->get();
        return view('subjects', ['id' => $id, 'subjects' => $subjects]);
    }

    public function store(Request $request, $id)
    {
        $semester = new Subject;
        $semester->semester_id = $id;
        $semester->name = $request->name;
        $semester->save();
        return redirect('/subjects'.'/'.$id);
    }

    public function destroy($sem_id, $id)
    {
        Student::where('subject_id', $id)->delete();
        Subject::destroy($id);
        return redirect('/subjects'.'/'.$sem_id);
    }
}
