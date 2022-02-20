<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class StudentImport implements ToCollection, WithHeadingRow
{

    private $id;

    public function __construct($id){
        $this->id = $id;
    }


    public function collection(Collection $rows)
    {
        foreach ($rows as $index => $row) 
        {
            Student::create([
                    'subject_id' => $this->id,
                    'cms_id' => $row['cms_id'],
                    'name' => $row['name'],
                    'clo1' => $row['clo1score'],
                    'clo2' => $row['clo2score'],
                    'clo3' => $row['clo3score'],
                    'clo4' => $row['clo4score'],
            ]);
        }
    }
}