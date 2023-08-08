@extends('employee.layout')
@section('employee')
    @if(session('flash_message'))
        <div class="container text-center  alert alert-warning ">
            {{ session('flash_message') }}
        </div>
    @endif
    <div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                        <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date of Birth</th>
                                    <th>Education Qualification</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Photo</th>
                                    <th>Resume</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $item)
                                    <tr>
                                        <td>{{ $item->employee_id }}</td>
                                        <td>{{ $item->firstname }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->date_of_birth }}</td>
                                        <td>{{ $item->education_qualification }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->photo }}</td>
                                        <td>{{ $item->resume }}</td>
                                        <td>
                                            <a href="{{ url('/employee/' . $item->employee_id). '/show' }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/employee/' . $item->employee_id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/employee' . '/' . $item->employee_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
