<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('staff.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();

        return view('auth.register', ['departments' => $departments]);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $id)
    {
        return view('staff.edit', ['staff' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id)
    {
        $id->update([

        ]);

        notify()->success('Staff details updated!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id->delete();

        notify()->success('Staff login detail deleted!');
        return back();
    }
}