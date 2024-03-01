<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=
[
    'subject_ID',
    'subject_name',
    'subject_credit_hour'
];
public function students()
{
    return $this->belongsToMany(Student::class, 'subjectstudent', 'subject_ID', 'student_ID');
}
}
