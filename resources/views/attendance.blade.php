@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('takeattendance') }}"><button type="button" class="btn btn-success bg-success mt-5">Add</button></a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Subject ID</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($attendances as $index => $attendance)
                <tr>
                    <td scope="col">{{ $index + 1 }}</td>
                    <td>{{ $attendance->reg_ID }}</td>
                    <td>{{ $attendance->subject_ID }}</td>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection