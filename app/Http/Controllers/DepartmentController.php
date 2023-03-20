<?php

namespace App\Http\Controllers;

use App\DataTables\DepartmentsDataTable;
use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(DepartmentsDataTable $dataTable)
    {
        return $dataTable->render('department.index');
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
            'description' => $request->description,
            'access_level' => $request->access_level
        ]);

        notify()->success('Department created successfully');

        return back();
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
    public function edit(Department $id)
    {
        return view("department.edit", ['department' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $id)
    {
        $id->update([
            'name' => $request->name,
            'description' => $request->description,
            'access_level' => $request->access_level
        ]);

        notify()->success('Department updated!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $id)
    {
        $id->delete();
        notify()->success('Department deleted!');
        
        return back();
    }
}