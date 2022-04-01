<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Student;

class PLOAttainmentChart extends BaseChart
{
    
    public ?string $name = 'plo_attainment_chart';

    public function handler(Request $request): Chartisan
    {   
        $total_students = Student::where('subject_id', Session::get('subject_id'))->get()->count();
        $students_who_passed_1 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo1', '>=', 50)->count();
        $students_who_passed_1_percentage = ($students_who_passed_1/$total_students)*100;
        $students_who_passed_2 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo2', '>=', 50)->count();
        $students_who_passed_2_percentage = ($students_who_passed_2/$total_students)*100;
        $students_who_passed_3 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo3', '>=', 50)->count();
        $students_who_passed_3_percentage = ($students_who_passed_3/$total_students)*100;
        $students_who_passed_4 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo4', '>=', 50)->count();
        $students_who_passed_4_percentage = ($students_who_passed_4/$total_students)*100;
        return Chartisan::build()
            ->labels([Session::get('column1'), Session::get('column2'), Session::get('column3'), Session::get('column4')])
            ->dataset('Required Attainment %',[60, 60, 60, 60])
            ->dataset('Attainment %', [$students_who_passed_1_percentage, $students_who_passed_2_percentage, $students_who_passed_3_percentage, $students_who_passed_4_percentage]);
    }
}