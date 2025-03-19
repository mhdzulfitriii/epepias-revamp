<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteConfirmation extends Component
{
    public $modalId;
    public $title;
    public $message;
    public $confirmRoute;
    /**
     * Create a new component instance.
     */
    public function __construct($modalId, $title, $message, $confirmRoute)
    {
        $this->modalId = $modalId;
        $this->title = $title;
        $this->message = $message;
        $this->confirmRoute = $confirmRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-confirmation');
    }
}
