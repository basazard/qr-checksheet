<?php

namespace App\Http\Controllers;

use App\Models\NXTDaily;
use Illuminate\Http\Request;

class NXTDailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nxt_daily.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NXTDaily  $nXTDaily
     * @return \Illuminate\Http\Response
     */
    public function show(NXTDaily $nXTDaily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NXTDaily  $nXTDaily
     * @return \Illuminate\Http\Response
     */
    public function edit(NXTDaily $nXTDaily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NXTDaily  $nXTDaily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NXTDaily $nXTDaily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NXTDaily  $nXTDaily
     * @return \Illuminate\Http\Response
     */
    public function destroy(NXTDaily $nXTDaily)
    {
        //
    }
}
