@extends('employee.layout')
@section('employee')
    <div class="card container">
        <div class="card-header">Contactus Page</div>
        <div>
            <div >
                <p>First name: {{ $employee->firstname }}</p>
                <p>First name: {{ $employee->lastname }}</p>
                <p>Date of Birth: {{ $employee->date_of_birth }}</p>
                <p>Education Qualification: {{ $employee->education_qualification }}</p>
                <p>Address : {{ $employee->address }}</p>
                <p>Email : {{ $employee->email }}</p>
                <p>Phone : {{ $employee->phone }}</p>
                @if ($employee->photo)
                    <p>Photo : <a href="{{ asset($employee->photo) }}" target="_blank"><img src="{{ asset($employee->photo) }}" alt="{{ $employee->photo }}" width="104" height="142"></a></p>
                @else
                    <p>Photo : No file uploaded.</p>
                @endif
                @if ($employee->resume)
                    <p>Resume : <a href="{{ asset($employee->resume) }}" target="_blank" download > {{ $employee->resume }}</a></p>
                @else
                    <p>Resume : No file uploaded.</p>
                @endif

            </div>

            </hr>

        </div>
    </div>
@stop
