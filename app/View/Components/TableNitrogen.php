<?php

namespace App\View\Components;

use App\Models\Nitrogen;
use Illuminate\View\Component;

class TableNitrogen extends Component
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
        $theadsNitrogen = [
            'No',
            'Update On',
            'LCD Display',
            'remarks',
            'Purity',
            'remarks',
            'checker',
        ];

        $nitrogen = Nitrogen::orderBy('updated_at', 'desc')->get();

        return view('components.table-nitrogen', compact('theadsNitrogen','nitrogen'));
    }
}
