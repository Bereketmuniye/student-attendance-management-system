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
    $attendances = Attendance::all(); // Assuming you have an Attendance model

    return view('attendance', compact('subjects', 'students', 'subjectstudents','attendances'));
}
public function store(Request $request)
{
    $dateArray = $request->input('date');
    $statusArray = $request->input('status');

    foreach ($dateArray as $key => $date) {
        if (isset($statusArray[$key])) {
            $attendance = new Attendance();
            $attendance->reg_ID = $key;
            $attendance->subject_ID = $statusArray[$key]; // Assign the subject ID (if needed)
            $attendance->date = $date;
            $attendance->status = $statusArray[$key]; // Assign the status value
            $attendance->save();
        }
    }

    return redirect()->route('attendance.index')->with('success', 'Attendance added successfully');
}
}
