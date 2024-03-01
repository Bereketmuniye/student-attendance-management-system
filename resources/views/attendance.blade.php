@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <br><br>
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Subject Code</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjectstudents as $subjectstudent)
                        <tr>
                            <td>{{ $subjectstudent->reg_ID }}</td>
                            <td>{{ $subjectstudent->subject_ID }}</td>
                            <td>
                                <input type="date" name="date[]" class="form-control" required>
                            </td>
                            <td>
                                <select name="status[{{ $subjectstudent->reg_ID }}_{{ $subjectstudent->subject_ID }}]" class="form-control">
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary bg-success">Submit</button>
        </form>
        <br>
        <br>
    </div>
@endsection