<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjectstudent extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'subject_ID',
        'student_ID',
        
    ];

}
