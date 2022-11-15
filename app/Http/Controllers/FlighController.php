<?php

namespace App\Http\Controllers;

use App\Models\Fligh;
use App\Http\Requests\StoreFlighRequest;
use App\Http\Requests\UpdateFlighRequest;

class FlighController extends Controller
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
     * @param  \App\Http\Requests\StoreFlighRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlighRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fligh  $fligh
     * @return \Illuminate\Http\Response
     */
    public function show(Fligh $fligh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fligh  $fligh
     * @return \Illuminate\Http\Response
     */
    public function edit(Fligh $fligh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlighRequest  $request
     * @param  \App\Models\Fligh  $fligh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlighRequest $request, Fligh $fligh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fligh  $fligh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fligh $fligh)
    {
        //
    }
}
