@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('attendance.store') }}" method="POST" class="mt-3">
            @csrf
            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <select name="reg_ID" id="reg_ID" class="form-control" required>
                    <option value="">Select Student ID</option>
                    @foreach($subjectStudents as $subjectStudent)
                        <option value="{{ $subjectStudent->reg_ID }}">{{ $subjectStudent->reg_ID }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject ID:</label>
                <select name="subject_ID" id="subject_ID" class="form-control" required>
                    <option value="">Select Subject ID</option>
                    @foreach($subjectStudents as $subjectStudent)
                        <option value="{{ $subjectStudent->subject_ID }}">{{ $subjectStudent->subject_ID }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" class="form-control" required>
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary bg-primary">Submit</button>
        </form>
    </div>
@endsection