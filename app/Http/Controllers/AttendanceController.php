<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Subjectstudent;
class AttendanceController extends Controller
{
    public function index()
{
    $students = Student::all();
    $subjects = Subject::all();
    $subjectstudents = Subjectstudent::all();
    $attendances = Attendance::all(); 

    return view('attendance', compact('subjects', 'students', 'subjectstudents','attendances'));
}


public function store(Request $request)
{
    $attendance = new Attendance();
    $attendance->reg_ID = $request->input('reg_ID');
    $attendance->subject_ID = $request->input('subject_ID');
    $attendance->date = $request->input('date');
    $attendance->status = $request->input('status');
    $attendance->save();

    return redirect()->route('attendance.index')->with('success', 'Attendance added successfully');
}
public function create()
{

    $subjectStudents = Subjectstudent::all();

    return view('takeattendance', compact('subjectStudents'));
}
}
