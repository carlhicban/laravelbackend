<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'cl_course_name'
    ];

    public function student()
    {
        return $this->belongsTo(TblStudent::class);
    }
}
