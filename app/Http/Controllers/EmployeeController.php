<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        return view ('employee.index')->with('employee', $employee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $extensionName = time() . '.' . $extension;
            $imagePath = $file->move('photo', $extensionName);
            $input['photo'] = $imagePath;
        }
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $extensionName = time() . '.' . $extension;
            $resumePath = $file->move('resume', $extensionName);
            $input['resume'] = $resumePath;
        }

        Employee::create($input);
        return redirect('employee')->with('flash_message', 'New Employee created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);
        return view('employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Employee::find($id);
        return view('employee.edit')->with('employee', $contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        $input = $request->all();
        if(empty( $input['photo'])){
            $input['photo'] = $employee->photo;

        }else{
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $extensionName = time() . '.' . $extension;
                $imagePath = $file->move('photo', $extensionName);
                $input['photo'] = $imagePath;
            }
        }
        if(empty( $input['resume'])){
            $input['resume'] = $employee->resume;
        }else{
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                $extension = $file->getClientOriginalExtension();
                $extensionName = time() . '.' . $extension;
                $resumePath = $file->move('resume', $extensionName);
                $input['resume'] = $resumePath;
            }
        }
        $employee->update($input);
        return redirect('employee')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect('employee')->with('flash_message', 'Contact deleted!');
    }
}
