<?php

namespace App\Http\Controllers;

use App\Models\LocalGovernment;
use App\Http\Requests\StoreLocalGovernmentRequest;
use App\Http\Requests\UpdateLocalGovernmentRequest;

class LocalGovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocalGovernmentRequest $request)
    {
        //
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
    public function edit(LocalGovernment $localGovernment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocalGovernmentRequest $request, LocalGovernment $localGovernment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocalGovernment $localGovernment)
    {
        //
    }
}
