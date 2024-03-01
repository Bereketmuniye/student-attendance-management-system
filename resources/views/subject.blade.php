@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('addsubject') }}"><button type="button" class="btn btn-success bg-success mt-5">Add</button></a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Subject Credit Hour</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $index => $subject)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $subject->subject_ID }}</td>
                    <td>{{ $subject->subject_name }}</td>
                    <td>{{ $subject->subject_credit_hour }}</td>
                    <td><button class="btn btn-success">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection