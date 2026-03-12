<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.staff_dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    public function a_index()
    {
        $staffs = User::role('staff')->get();

        return view('backend.staff.index', compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Name field must be filled',
            'email.unique' => 'Email already taken',
            'password.min' => 'Password must be 8 characters',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole('staff');

        return redirect()->route('admin.staff.a_index')->with('success', 'Staff created successfully');
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

    public function changeStatus(Request $request)
    {
        $user = User::find($request->id);

        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }
}
