<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoginCardComponent extends Component
{
    public $designation;
    public $description;
    public $fontIcon;
    public $userType;
    public $extendClass;
    public $authPropert;
    public $authLogo;
    public function __construct($designation, $description, $fontIcon, $userType,$extendClass, $authPropert, $authLogo)
    {
        $this->designation = $designation;
        $this->description = $description;
        $this->fontIcon = $fontIcon;
        $this->userType = $userType;
        $this->extendClass = $extendClass;
        $this->authPropert = $authPropert;
        $this->authLogo = $authLogo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login-card-component');
    }
}
