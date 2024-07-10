<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputtext extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $id, public $name, public $labelname, public $autocomplete, public $divclass = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputtext');
    }
}
