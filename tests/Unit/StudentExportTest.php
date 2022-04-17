<?php

namespace Tests\Unit\Exports;

use App\Exports\StudentExport;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Support\Facades\Session;

use Tests\TestCase;

/**
 * Class StudentExportTest.
 *
 * @covers \App\Exports\StudentExport
 */
class StudentExportTest extends TestCase{
    
    /** @test */
    public function student_report_can_be_exported_in_table_format(): void
    {

        $type = 'table';
        $arr = ['id' => Session::get('subject_id'),'sem_id' => Session::get('sem_id'),'students' => Session::get('students'),'column1' => Session::get('column1'),'column2' => Session::get('column2'),
        'column3' => Session::get('column3'), 'column4' => Session::get('column4'), 'semester_name' => Session::get('semester_name'),'subject_name' => Session::get('subject_name'),'plevel1' => Session::get('plevel1'),
        'plevel2' => Session::get('plevel2'),'plevel3' => Session::get('plevel3'),'plevel4' => Session::get('plevel4'),
        'bt1' => Session::get('bt1'),'bt2' => Session::get('bt2'),'bt3' => Session::get('bt3'),'bt4' => Session::get('bt4')];


        // $Obtview = $studentExport->view();
        // $Obtview->shouldReceive('with')->with($type, $arr);
        
        $this->assertEquals(view($type , $arr) , StudentExport::view());
    }


}
