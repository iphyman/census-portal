<?php

namespace App\Http\Controllers;

use App\DataTables\StatesDataTable;
use App\Models\LocalGovernment;
use App\Models\State;
use App\Http\Requests\StoreStateRequest;
use App\Http\Requests\UpdateStateRequest;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StatesDataTable $dataTable)
    {
        return $dataTable->render('state.index');
    }

    /**
     * Get all LGA of a state
     */

    public function getLGA($state)
    {
        $data['lgas'] = LocalGovernment::where('state_id', $state)->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStateRequest $request)
    {
        State::create([
            'name' => $request->name,
            'capital' => $request->capital,
            'demonym' => $request->demonym,
            'land_area' => $request->land_area,
            'postal_code' => $request->postal_code,
            'iso_code' => $request->iso_code
        ]);

        notify()->success('State added successfully!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $id)
    {
        return view('state.edit', ['state' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStateRequest $request)
    {
        $request->user()->update([
            'name' => $request->name,
            'capital' => $request->capital,
            'demonym' => $request->demonym,
            'land_area' => $request->land_area,
            'postal_code' => $request->postal_code,
            'iso_code' => $request->iso_code
        ]);

        notify()->success('State updated successfully!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $id)
    {
        $id->delete();
        notify()->success('State deleted!');

        return back();
    }
}