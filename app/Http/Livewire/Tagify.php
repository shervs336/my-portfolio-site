<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tagify extends Component
{
    public $content;

    public $placeholder;

    public function render()
    {
        return view('livewire.components.tagify');
    }
}
