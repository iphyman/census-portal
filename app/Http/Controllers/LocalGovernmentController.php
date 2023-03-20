<?php

namespace App\Http\Controllers;

use App\DataTables\LocalGovernmentsDataTable;
use App\Models\LocalGovernment;
use App\Http\Requests\StoreLocalGovernmentRequest;
use App\Http\Requests\UpdateLocalGovernmentRequest;
use App\Models\State;

class LocalGovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LocalGovernmentsDataTable $dataTable)
    {
        return $dataTable->render('lga.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::all();
        return view('lga.create', ['states' => $states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocalGovernmentRequest $request)
    {
        LocalGovernment::create([
            'name' => $request->name,
            'state_id' => $request->state_id,
            'land_area' => $request->land_area,
        ]);

        notify()->success('Local Government added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(LocalGovernment $localGovernment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocalGovernment $id)
    {
        return view('lga.edit', ['lga' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocalGovernmentRequest $request, LocalGovernment $id)
    {
        $id->update([
            'name' => $request->name,
            'state_id' => $request->state_id,
            'land_area' => $request->land_area,
        ]);

        notify()->success('LGA updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocalGovernment $id)
    {
        $id->delete();

        notify()->success('LGA deleted!');

        return back();
    }
}