<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showlogin()
    {

        $user = Admin::all();
        return view('login.login')->with('user',$user);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('username','password');
         if(!empty($credentials)) {
             $users = Admin::all();
             foreach ($users as $user) {
                 print_r($credentials['password']);
                 if ($user['username'] == $credentials['username'] && $credentials['password'] == $user['password']) {
                     return redirect()->intended('/employee'); // Replace with your desired redirect URL
                 }
             }
         }
        return redirect('login')->with([
            'flash_message' => 'Invalid credentials',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
