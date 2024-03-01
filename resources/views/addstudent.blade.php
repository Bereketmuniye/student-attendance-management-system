@extends('layouts.app')

@section('content')
<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Registration Form </p>
        </div>

        <form action="{{ route('student.store') }}" method="POST">
            @csrf

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="reg_ID" placeholder="UGR *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name *" value="" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary bg-primary">Submit</button>
            </div>

            
        </form>

    </div>
</div>
@endsection