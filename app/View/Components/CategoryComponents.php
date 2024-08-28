<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryComponents extends Component
{
    // public $response;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        // return $this->response = $response;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-components');
    }
}
