<?php

namespace App\View\Components;

use App\Models\Nitrogen as ModelsNitrogen;
use Carbon\Carbon;
use Illuminate\View\Component;

class Nitrogen extends Component
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
        $nitrogen = ModelsNitrogen::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('components.nitrogen', compact('nitrogen'));
    }
}
