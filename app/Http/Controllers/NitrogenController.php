<?php

namespace App\Http\Controllers;

use App\Models\Nitrogen;
use Carbon\Carbon;
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

        $theads = [
            'NO',
            'ITEM',
            'STANDARD',	
            'CURRENT CONDITION',
            'REMARKS',
            'CHECKED',
        ];

        $nitrogen = Nitrogen::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('nitrogen.index', compact('items','theads','nitrogen'));
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
        $nitrogen = Nitrogen::create([
            'LCDDisplay' => $request->LCDDisplay,
            'remarks1' => $request->remarks1,
            'Purity' => $request->Purity,
            'remarks2' => $request->remarks2,
            'checker' => $request->checker,
        ]);

        return redirect()->route('dashboard')->with('message', 'Your data is successfully recorded!');
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
    public function update(Request $request, $id)
    {
        $nitrogen = Nitrogen::find($id)->update($request->all()); 

        return redirect()->route('dashboard')->with('message', 'Your data is successfully updated!');
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
