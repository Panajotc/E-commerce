<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Itemstyle8 extends Component
{
    public $name;
    public $imag;
    public $discount;
    public $pric;
    public function mount($pric,$discount,$name,$imag){
        $this->name1=$name;
        $this->imag1=$imag;
        $this->discount1=$discount;
        $this->pric1=$pric;
    }
    public function render()
    {
        return view('livewire.itemstyle8');
    }
}
