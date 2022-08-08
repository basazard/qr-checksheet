<?php

namespace App\Http\Controllers;

use App\Models\Compressor;
use Illuminate\Http\Request;

class CompressorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = [
            'LCD Display' => 'Nyala',
            'Emergency Button' => 'Tidak ditekan',
            'Loading Pressure' => '0.6 ~ 0.8 kg/cm2',
            'Temperature Mesin' => '< 65°C',
            'Temperatur Oil' => '< 65°C',
            'Pressure Oil' => '> 1.6 bar',
            'Body Compressor' => 'Bebas Debu',
            'Temp LP Element' => '< 200°C',
            'Temp HP Element' => '< 200°C',
        ];

        $names = [
            'lcd_display',
            'emergency_button',
            'loading_pressure',
            'temp_mesin',
            'temp_oil',
            'pressure_oil',
            'body_compressor',
            'temp_lp_element',
            'temp_hp_element',
        ];

        $theads = [
            'NO',
            'ITEM',
            'STANDARD',	
            'CURRENT CONDITION',
            'REMARKS',
            'CHECKED',
        ];

        return view('compressor.index', compact('items', 'names', 'theads'));
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
     * @param  \App\Models\Compressor  $compressor
     * @return \Illuminate\Http\Response
     */
    public function show(Compressor $compressor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compressor  $compressor
     * @return \Illuminate\Http\Response
     */
    public function edit(Compressor $compressor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compressor  $compressor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compressor $compressor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compressor  $compressor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compressor $compressor)
    {
        //
    }
}
