<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('department.index', $departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("department.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        Department::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return back()->with('success', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('department.show', $department);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view("state.edit", $department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return back()->with('success', 'Department updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('success', 'Department deleted!');
    }
}