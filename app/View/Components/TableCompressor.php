<?php

namespace App\View\Components;

use App\Models\Compressor;
use Illuminate\View\Component;

class TableCompressor extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $theadsCompressor = [
            'No',
            'Update On',
            'LCD Display',
            'remarks',
            'Emergency Button',
            'remarks',
            'Loading Pressure',
            'remarks',
            'Temperature Mesin',
            'remarks',
            'Temperature Oil',
            'remarks',
            'Pressure Oil',
            'remarks',
            'Body Compressor',
            'remarks',
            'Temp LP Element',
            'remarks',
            'Temp HP Element',
            'remarks',
            'checker',
        ];

        $compressor = Compressor::orderBy('updated_at', 'desc')->get();

        return view('components.table-compressor',compact('compressor','theadsCompressor'));
    }
}
