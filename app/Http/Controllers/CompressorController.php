<?php

namespace App\Http\Controllers;

use App\Models\Compressor;
use Carbon\Carbon;
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
            'Temperature Oil' => '< 65°C',
            'Pressure Oil' => '> 1.6 bar',
            'Body Compressor' => 'Bebas Debu',
            'Temp LP Element' => '< 200°C',
            'Temp HP Element' => '< 200°C',
        ];

        $theads = [
            'NO',
            'ITEM',
            'STANDARD',	
            'CURRENT CONDITION',
            'REMARKS',
            'CHECKED',
        ];

        $compressor = Compressor::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('compressor.index', compact('items', 'theads', 'compressor'));
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
        $compressor = Compressor::create([
            'LCDDisplay' => $request->LCDDisplay,
            'remarks1' => $request->remarks1,
            'EmergencyButton' => $request->EmergencyButton,
            'remarks2' => $request->remarks2,
            'LoadingPressure' => $request->LoadingPressure,
            'remarks3' => $request->remarks3,
            'TemperatureMesin' => $request->TemperatureMesin,
            'remarks4' => $request->remarks4,
            'TemperatureOil' => $request->TemperatureOil,
            'remarks5' => $request->remarks5,
            'PressureOil' => $request->PressureOil,
            'remarks6' => $request->remarks6,
            'BodyCompressor' => $request->BodyCompressor,
            'remarks7' => $request->remarks7,
            'TempLPElement' => $request->TempLPElement,
            'remarks8' => $request->remarks8,
            'TempHPElement' => $request->TempHPElement,
            'remarks9' => $request->remarks9,
            'checker' => $request->checker,
        ]);

        return redirect()->route('dashboard')->with('message', 'Your data is successfully recorded!');
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
    public function update(Request $request, $id)
    {
        $compressor = Compressor::find($id)->update($request->all()); 

        return redirect()->route('dashboard')->with('message', 'Your data is successfully updated!');
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
