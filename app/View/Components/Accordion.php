<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    public $judul;
    // public $konten;

    /**
     * Create a new component instance.
     *
     * @param string $judul
     * @param string $konten
     */
    public function __construct($judul)
    {
        $this->judul = $judul;
        // $this->konten = $konten;
    }

    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
