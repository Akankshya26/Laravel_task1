<?php

namespace App\View\Components;

use Illuminate\View\Component;

class layout extends Component
{
    public $name;
    public $type;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $label)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
