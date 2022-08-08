<?php

namespace App\Http\Controllers;

use App\Models\Nitrogen;
use Illuminate\Http\Request;

class NitrogenController extends Controller
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
            'Purity' => '<= 100ppm',
        ];

        $names = [
            'lcd_display',
            'purity',
        ];

        return view('nitrogen.index', compact('items','names'));
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
     * @param  \App\Models\Nitrogen  $nitrogen
     * @return \Illuminate\Http\Response
     */
    public function show(Nitrogen $nitrogen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nitrogen  $nitrogen
     * @return \Illuminate\Http\Response
     */
    public function edit(Nitrogen $nitrogen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nitrogen  $nitrogen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nitrogen $nitrogen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nitrogen  $nitrogen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nitrogen $nitrogen)
    {
        //
    }
}
