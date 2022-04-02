<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index($id){
        $semester_name = Semester::find($id)->name;
        $subjects = Subject::where('semester_id', $id)->where('user_id', Auth::user()->id)->get();
        return view('subjects', ['id' => $id, 'subjects' => $subjects, 'semester_name' => $semester_name]);
    }

    public function store(Request $request, $id)
    {
        $subject = new Subject;
        $subject->semester_id = $id;
        $subject->user_id = Auth::user()->id;
        $subject->name = $request->name;
        $subject->save();
        return redirect('/subjects'.'/'.$id);
    }

    public function destroy($sem_id, $id)
    {
        Student::where('subject_id', $id)->delete();
        Subject::destroy($id);
        return redirect('/subjects'.'/'.$sem_id);
    }
}
