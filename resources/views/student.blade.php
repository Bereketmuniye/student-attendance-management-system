@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('addstudent') }}"><button type="button" class="btn btn-success bg-success mt-5">Add</button></a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->reg_ID }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>
                            <button type="button" class="btn btn-primary bg-success" data-toggle="modal" data-target="#exampleModal{{ $student->reg_ID }}">Assign</button>
                            <div class="modal fade" id="exampleModal{{ $student->reg_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Assign student to subject</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="assignForm{{ $student->reg_ID }}" action="{{ route('student.assigned') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="subject{{ $student->reg_ID }}">Subject:</label>
                                                    <select class="form-control" id="subject{{ $student->reg_ID }}" name="subject_ID" required>
                                                        @php
                                                        $subjects = \App\Models\Subject::all();
                                                        @endphp
                                                        @foreach($subjects as $innerIndex => $subject)
                                                            <option value="{{ $subject->ID }}">{{ $subject->subject_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <input type="hidden" name="reg_ID" value="{{ $student->reg_ID }}">
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary bg-success" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary bg-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection