<?php

namespace App\Http\Controllers;

use App\Models\Dryer;
use Illuminate\Http\Request;

class DryerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = [
            'Humidity' => 'Min -20%',
            'Body Dryer' => 'Bebas Debu',
            'Indikator Filter In' => 'Range Hijau',
            'Indikator Filter Out' => 'Range Hijau',
        ];

        $names = [
            'humidity',
            'body_dryer',
            'indikator_filter_in',
            'indikator_filter_out',
        ];

        return view('dryer.index', compact('items','names'));
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
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function show(Dryer $dryer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function edit(Dryer $dryer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dryer $dryer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dryer  $dryer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dryer $dryer)
    {
        //
    }
}
