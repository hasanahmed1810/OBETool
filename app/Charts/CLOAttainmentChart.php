<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Student;

class CLOAttainmentChart extends BaseChart
{
    
    public ?string $name = 'clo_attainment_chart';

    public function handler(Request $request): Chartisan
    {   
        $total_students = Student::where('subject_id', Session::get('subject_id'))->get()->count();
        $students_who_passed_1 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo1', '>=', 40)->count();
        $students_who_passed_1_percentage = ($students_who_passed_1/$total_students)*100;
        $students_who_passed_2 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo2', '>=', 40)->count();
        $students_who_passed_2_percentage = ($students_who_passed_2/$total_students)*100;
        $students_who_passed_3 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo3', '>=', 40)->count();
        $students_who_passed_3_percentage = ($students_who_passed_3/$total_students)*100;
        $students_who_passed_4 = Student::where('subject_id', Session::get('subject_id'))->get()->where('clo4', '>=', 40)->count();
        $students_who_passed_4_percentage = ($students_who_passed_4/$total_students)*100;
        return Chartisan::build()
            ->labels(['CLO 1', 'CLO 2', 'CLO 3', 'CLO 4'])
            ->dataset('Required Attainment %',[80, 80, 80, 80])
            ->dataset('Attainment %', [$students_who_passed_1_percentage, $students_who_passed_2_percentage, $students_who_passed_3_percentage, $students_who_passed_4_percentage]);
    }
}