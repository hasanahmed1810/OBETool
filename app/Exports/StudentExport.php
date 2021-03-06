<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Session;

class StudentExport implements FromView
{
    public function view(): View
    {
        return view('table', ['id' => Session::get('subject_id'), 'sem_id' => Session::get('sem_id'), 'students' => Session::get('students'), 'column1' => Session::get('column1'), 'column2' => Session::get('column2'), 'column3' => Session::get('column3'), 'column4' => Session::get('column4'), 'semester_name' => Session::get('semester_name'), 'subject_name' => Session::get('subject_name'), 'plevel1' => Session::get('plevel1'), 'plevel2' => Session::get('plevel2'), 'plevel3' => Session::get('plevel3'), 'plevel4' => Session::get('plevel4'), 'bt1' => Session::get('bt1'), 'bt2' => Session::get('bt2'), 'bt3' => Session::get('bt3'), 'bt4' => Session::get('bt4'), 'weightage1' => Session::get('weightage1'), 'weightage2' => Session::get('weightage2'), 'weightage3' => Session::get('weightage3'), 'weightage4' => Session::get('weightage4')]);
    }
}