<?php

namespace App\View\Components;

use App\Models\Dryer as ModelsDryer;
use Illuminate\View\Component;
use Carbon\Carbon;

class Dryer extends Component
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
        $dryer = ModelsDryer::whereDate('created_at', '=', Carbon::today())->latest()->limit(1)->get();

        return view('components.dryer', compact('dryer'));
    }
}
