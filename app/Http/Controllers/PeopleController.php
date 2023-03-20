<?php

namespace App\Http\Controllers;

use App\DataTables\PeoplesDataTable;
use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\State;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PeoplesDataTable $dataTable)
    {
        return $dataTable->render('people.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('people.create', ['states' => $states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeopleRequest $request)
    {
        People::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'state_id' => $request->state_id,
            'local_government_id' => $request->local_government_id,
            'residential_area' => $request->residential_area,
            'sex' => $request->sex,
            'marital_status' => $request->marital_status,
            'occupation' => $request->occupation
        ]);

        notify()->success('Registered successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $id)
    {
        $states = State::all();
        return view('people.edit', ['people' => $id, 'states' => $states]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeopleRequest $request, People $id)
    {
        $id->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'state_id' => $request->state_id,
            'local_government_id' => $request->local_government_id,
            'residential_area' => $request->residential_area,
            'sex' => $request->sex,
            'marital_status' => $request->marital_status,
            // 'occupation' => $request->occupation
        ]);

        notify()->success('Citizen data updated!');

        return redirect('people');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $id)
    {
        $id->delete();

        notify()->success('Citizen data deleted!');

        return back();
    }
}