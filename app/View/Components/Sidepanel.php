<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidepanel extends Component
{

    /**
     * Id de identificação
     *
     * @var string
     */
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidepanel');
    }
}
