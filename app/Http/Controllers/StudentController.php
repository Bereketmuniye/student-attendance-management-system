<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Subjectstudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
   {
    $students=Student::all();
    return view('student',compact('students'));
   }
   public function add()
   {
    return view('addstudent');
   }
   public function store(Request $request)
   {
    $student =new Student();
    $student->reg_ID=$request->input('reg_ID');
    $student->first_name=$request->input('first_name');
    $student->last_name=$request->input('last_name');
    $student->save();
    return redirect()->route('student.index')->with('success', 'Student added successfully');
   }
   public function assignSubjects(Request $request)
{
    $studentId = $request->input('reg_ID');
    $subjectId = $request->input('subject_ID');

    $studentSubject = new Subjectstudent();
    $studentSubject->reg_ID = $studentId;
    $studentSubject->subject_ID = $subjectId;
    $studentSubject->save();
    return redirect()->route('student.index')->with('success', 'Student added successfully');
}
      
  
   
}
