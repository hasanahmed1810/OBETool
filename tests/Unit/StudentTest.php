<?php

namespace Tests\Unit;

use App\Models\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function getStudent(){
        return new Student;
    }
    /** @test */
    public function student_attributes_are_correct()
    {
        $expected = ['subject_id', 'cms_id', 'name', 'clo1', 'clo2', 'clo3', 'clo4'];

        $this->assertEquals($expected ,  $this->getStudent()->getFillable());
    }

    /** @test */
    public function student_name_is_fillable()
    {
        $this->assertTrue(in_array('name', $this->getStudent()->getFillable()));
    }

     /** @test */
    public function subject_id_is_fillable()
    {
        $this->assertTrue(in_array('subject_id', $this->getStudent()->getFillable()));
    }

     /** @test */
    public function student_cms_id_is_fillable()
    {
        $this->assertTrue(in_array('cms_id', $this->getStudent()->getFillable()));
    }

     /** @test */
    public function clo_scores_are_fillable()
    {
        $this->assertTrue( in_array('clo1', $this->getStudent()->getFillable()) 
                        && in_array('clo2', $this->getStudent()->getFillable())
                        && in_array('clo3', $this->getStudent()->getFillable())
                        && in_array('clo4', $this->getStudent()->getFillable()) );
    }

}


