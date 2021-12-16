<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Itemstyle9 extends Component
{
    public $name;
    public $imag;
    public $discount;
    public $pric;
    public $details;
    public function mount($pric,$discount,$name,$imag,$details){
        $this->name1=$name;
        $this->imag1=$imag;
        $this->discount1=$discount;
        $this->pric1=$pric;
        $this->details1=$details;
    }
    public function render()
    {
        return view('livewire.itemstyle9');
    }
}
