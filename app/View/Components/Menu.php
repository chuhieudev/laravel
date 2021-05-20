<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Services\CategoryService;

class Menu extends Component
{
    public $Categories=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(CategoryService $CategoryService)
    {
        $this->Categories=$CategoryService->menus();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
