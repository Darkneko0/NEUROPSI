<?php

namespace App\Http\Controllers;

use App\Models\TherapistPatients;
use App\Http\Requests\StoreTherapistPatientsRequest;
use App\Http\Requests\UpdateTherapistPatientsRequest;

class TherapistPatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTherapistPatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTherapistPatientsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TherapistPatients  $therapistPatients
     * @return \Illuminate\Http\Response
     */
    public function show(TherapistPatients $therapistPatients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TherapistPatients  $therapistPatients
     * @return \Illuminate\Http\Response
     */
    public function edit(TherapistPatients $therapistPatients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTherapistPatientsRequest  $request
     * @param  \App\Models\TherapistPatients  $therapistPatients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTherapistPatientsRequest $request, TherapistPatients $therapistPatients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TherapistPatients  $therapistPatients
     * @return \Illuminate\Http\Response
     */
    public function destroy(TherapistPatients $therapistPatients)
    {
        //
    }
}
