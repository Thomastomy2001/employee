@extends('employee.layout')
@section('employee')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('employee/' .$employee->employee_id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$employee->employee_id}}" id="id" />
                <label>First Name</label></br>
                <input type="text" name="firstname" id="firstname" value="{{$employee->firstname}}" class="form-control" required></br>
                <label>last Name</label></br>
                <input type="text" name="lastname" id="lastname" value="{{$employee->lastname}}" class="form-control" required></br>
                <label>Date of Birth</label></br>
                <input type="date" name="date_of_birth"  id="date_of_birth" value="{{$employee->date_of_birth}}"  class="form-control" required></br>
                <label>Education Qualification</label></br>
                <input type="text" name="education_qualification" value="{{$employee->education_qualification}}" id="education_qualification"  required class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address"  value="{{$employee->address}}" class="form-control" required></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" value="{{$employee->email}}" class="form-control" required></br>
                <label>phone</label></br>
                <input type="text" name="phone" id="phone" value="{{$employee->phone}}" class="form-control" required></br>
                <label>Photo</label></br>
                <input type="file" name="photo" id="photo" value="{{$employee->photo}}" class="form-control" ></br>
                @if ($employee->photo)
                    <p>Current File: <a href="{{ asset($employee->photo) }}" target="_blank">{{ $employee->photo }}</a></p>
                @else
                    <p>No file uploaded.</p>
                @endif
                <label>Resume</label></br>
                <input type="file" name="resume" id="resume" value="{{$employee->resume}} " class="form-control" ></br>
                @if ($employee->resume)
                    <p>Current File: <a href="{{ asset($employee->resume) }}" target="_blank" download > {{ $employee->resume }}</a></p>
                @else
                    <p>No file uploaded.</p>
                @endif
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
