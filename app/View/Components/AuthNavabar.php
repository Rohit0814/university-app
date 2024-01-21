<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthNavabar extends Component
{
    /**
     * Create a new component instance.
     */

    public $guard;
    public $guardVar;
    public $imagePath;
    public function __construct($guard, $guardVar, $imagePath)
    {
        $this->guard = $guard;
        $this->guardVar = $guardVar;
        $this->imagePath = $imagePath;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-navabar');
    }
}
