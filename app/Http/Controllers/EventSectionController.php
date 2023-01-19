<?php

namespace App\Http\Controllers;

use App\Models\EventSection;
use App\Http\Requests\StoreEventSectionRequest;
use App\Http\Requests\UpdateEventSectionRequest;

class EventSectionController extends Controller
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
     * @param  \App\Http\Requests\StoreEventSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventSection  $eventSection
     * @return \Illuminate\Http\Response
     */
    public function show(EventSection $eventSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventSection  $eventSection
     * @return \Illuminate\Http\Response
     */
    public function edit(EventSection $eventSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventSectionRequest  $request
     * @param  \App\Models\EventSection  $eventSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventSectionRequest $request, EventSection $eventSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventSection  $eventSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventSection $eventSection)
    {
        //
    }
}
