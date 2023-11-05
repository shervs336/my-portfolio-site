<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TinyMce extends Component
{
   
    public $value;
    
    protected $listeners = ['valueChanged' => 'runSomething'];
    
    public function runSomething()
    {
        dd('test');
    }

    public function render()
    {
        return view('livewire.tiny-mce');
    }
    

}