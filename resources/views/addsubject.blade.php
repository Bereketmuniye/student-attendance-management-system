@extends('layouts.app')

@section('content')
<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Registration Form </p>
        </div>

        <form action="{{ route('subject.store') }}" method="POST">
            @csrf

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject_ID" placeholder="Subject Id *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject_name" placeholder="Subject Name *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject_credit_hour" placeholder="Credit Hour *" value="" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary bg-primary">Submit</button>
            </div>

            
        </form>

    </div>
</div>
@endsection