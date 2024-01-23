<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminGeneralSetting extends Component
{
    public $label;
    public $labelValue;
    public $boxType;
    public $name;
    public function __construct($label, $labelValue,$boxType,$name)
    {
        $this->label = $label;
        $this->labelValue = $labelValue;
        $this->boxType = $boxType;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-general-setting');
    }
}
