<?php

namespace App\Http\Controllers;

use App\Models\Finger_Print;
use App\Http\Requests\StoreFinger_PrintRequest;
use App\Http\Requests\UpdateFinger_PrintRequest;

class FingerPrintController extends Controller
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
     * @param  \App\Http\Requests\StoreFinger_PrintRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinger_PrintRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finger_Print  $finger_Print
     * @return \Illuminate\Http\Response
     */
    public function show(Finger_Print $finger_Print)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finger_Print  $finger_Print
     * @return \Illuminate\Http\Response
     */
    public function edit(Finger_Print $finger_Print)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinger_PrintRequest  $request
     * @param  \App\Models\Finger_Print  $finger_Print
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinger_PrintRequest $request, Finger_Print $finger_Print)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finger_Print  $finger_Print
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finger_Print $finger_Print)
    {
        //
    }
}
