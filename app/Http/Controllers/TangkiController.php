<?php

namespace App\Http\Controllers;

use App\Models\Tangki;
use Illuminate\Http\Request;

class TangkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = [
            'Kran Pembuangan Air Tangki #1' => 'Tidak Ada Air',
            'Tekanan Angin Tangki #1' => '0.6 ~ 0.9 kg/cm2',
            'Tekanan Angin Tangki #2' => '0.6 ~ 0.8 kg/cm2',
            'Tekanan Angin Tangki #3' => '0.5 ~ 0.8 kg/cm2',
        ];

        return view('tangki.index', compact('items'));
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
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function show(Tangki $tangki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function edit(Tangki $tangki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tangki $tangki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tangki $tangki)
    {
        //
    }
}
