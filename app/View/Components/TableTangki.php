<?php

namespace App\View\Components;

use App\Models\Tangki;
use Illuminate\View\Component;

class TableTangki extends Component
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
        $theadsTangki = [
            'No',
            'Update On',
            'Kran Pembuangan Air Tangki 1',
            'remarks',
            'Tekanan Angin Tangki 1',
            'remarks',
            'Tekanan Angin Tangki 2',
            'remarks',
            'Tekanan Angin Tangki 3',
            'remarks',
            'checker',
        ];

        $tangki = Tangki::orderBy('updated_at', 'desc')->get();

        return view('components.table-tangki',compact('tangki','theadsTangki'));
    }
}
