<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects=Subject::all();
        return view('subject',compact('subjects'));
    }

    public function add()
   {
    return view('addsubject');
   }
   public function store(Request $request)
   {
    $subject =new Subject();
    $subject->subject_ID=$request->input('subject_ID');
    $subject->subject_name=$request->input('subject_name');
    $subject->subject_credit_hour=$request->input('subject_credit_hour');
    $subject->save();
    return redirect()->route('subject.index')->with('success', 'subject added successfully');
   }
}
