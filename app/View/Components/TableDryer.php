<?php

namespace App\View\Components;

use App\Models\Dryer;
use Illuminate\View\Component;

class TableDryer extends Component
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
        $theadsDryer = [
            'No',
            'Update On',
            'Humidity',
            'remarks',
            'Body Dryer',
            'remarks',
            'Indikator Filter In',
            'remarks',
            'Indikator Filter Out',
            'remarks',
            'checker',
        ];

        $dryer = Dryer::orderBy('updated_at', 'desc')->get();
        
        return view('components.table-dryer', compact('theadsDryer','dryer'));
    }
}
