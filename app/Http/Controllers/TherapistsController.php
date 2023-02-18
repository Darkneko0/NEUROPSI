<?php

namespace App\Http\Controllers;

use App\Models\Therapists;
use App\Http\Requests\StoreTherapistsRequest;
use App\Http\Requests\UpdateTherapistsRequest;

class TherapistsController extends Controller
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
     * @param  \App\Http\Requests\StoreTherapistsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTherapistsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Therapists  $therapists
     * @return \Illuminate\Http\Response
     */
    public function show(Therapists $therapists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Therapists  $therapists
     * @return \Illuminate\Http\Response
     */
    public function edit(Therapists $therapists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTherapistsRequest  $request
     * @param  \App\Models\Therapists  $therapists
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTherapistsRequest $request, Therapists $therapists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Therapists  $therapists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Therapists $therapists)
    {
        //
    }
}
