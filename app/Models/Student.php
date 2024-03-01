<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
protected $fillable=
[
    'reg_ID',
    'first_name',
    'last_name'
];
public function subjects()
{
    return $this->belongsToMany(Subject::class, 'subjectstudent', 'student_ID', 'subject_ID');
}
}
