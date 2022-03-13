<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'cl_firstname',
        'cl_lastname'
    ];
    
    public function course()
    {
        return $this->belongsTo(TblCourse::class);
    }
}
