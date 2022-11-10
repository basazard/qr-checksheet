<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use App\Models\Tangki;
use Carbon\Carbon;
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
        $authorizations = Authorization::all();

        return view('tangki.index', compact('authorizations'));
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
        $tangki = Tangki::create([
            'KranPembuanganAirTangki1' => $request->KranPembuanganAirTangki1,
            'remarks1' => $request->remarks1,
            'TekananAnginTangki1' => $request->TekananAnginTangki1,
            'remarks2' => $request->remarks2,
            'TekananAnginTangki2' => $request->TekananAnginTangki2,
            'remarks3' => $request->remarks3,
            'TekananAnginTangki3' => $request->TekananAnginTangki3,
            'remarks4' => $request->remarks4,
            'checker' => $request->checker,
        ]);

        return redirect()->route('dashboard')->with('message', 'Your data is successfully recorded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function show(Tangki $tangki)
    {
        $items = [
            'Kran Pembuangan Air Tangki 1' => 'Tidak Ada Air',
            'Tekanan Angin Tangki 1' => '0.6 ~ 0.9 kg/cm2',
            'Tekanan Angin Tangki 2' => '0.6 ~ 0.8 kg/cm2',
            'Tekanan Angin Tangki 3' => '0.5 ~ 0.8 kg/cm2',
        ];

        $theads = [
            'NO',
            'ITEM',
            'STANDARD',	
            'CURRENT CONDITION',
            'REMARKS',
            'CHECKED',
        ];

        $tangkiToday = Tangki::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('tangki.show', compact('items','theads','tangkiToday'));
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
    public function update(Request $request, $id)
    {
        $tangki = Tangki::find($id)->update($request->all()); 

        return redirect()->route('dashboard')->with('message', 'Your data is successfully updated!');
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
