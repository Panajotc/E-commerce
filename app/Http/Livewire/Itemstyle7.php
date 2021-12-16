<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Itemstyle7 extends Component
{
    public $imag;
    public function mount($imag){
        $this->imag1=$imag;
    }
    public function render()
    {
        return view('livewire.itemstyle7');
    }
}
