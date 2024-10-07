<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $image;
    public $title;
    public $subtitle;

    /**
     * Create a new component instance.
     *
     * @param string $image
     * @param string $title
     * @param string $subtitle
     */
    public function __construct($image, $title, $subtitle)
    {
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
