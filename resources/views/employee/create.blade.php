@extends('employee.layout')
@section('employee')
    <div class="container card">
        <div class="card-header text-center">create employee Page</div>
        <div class="card-body">

            <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label>First Name</label></br>
                <input type="text" name="firstname" id="firstname" class="form-control" required></br>
                <label>last Name</label></br>
                <input type="text" name="lastname" id="lastname" class="form-control" required></br>
                <label>Date of Birth</label></br>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" ></br>
                <label>Education Qualification</label></br>
                <input type="text" name="education_qualification" id="education_qualification" class="form-control" required></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control" required></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" class="form-control" required></br>
                <label>phone</label></br>
                <input type="text" name="phone" id="phone" class="form-control" required></br>
                <label>Photo</label></br>
                <input type="file" name="photo" id="photo" class="form-control" required></br>
                <label>Resume</label></br>
                <input type="file" name="resume" id="resume" class="form-control" required></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
