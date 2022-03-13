<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblStudentCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'tbl_student_id',
        'tbl_course_id'
    ];
    
     
}
