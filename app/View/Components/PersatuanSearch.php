<?php

namespace App\View\Components;

use App\Models\libPersatuan;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PersatuanSearch extends Component
{
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $persatuan = libPersatuan::all();
        return view('components.persatuan-search-noTRX', compact('persatuan'));
    }
}
