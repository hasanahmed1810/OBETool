<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'cms_id', 'name', 'clo1', 'clo2', 'clo3', 'clo4'];

    public function getFillable(){
        return $this->fillable;
     }
     
}
