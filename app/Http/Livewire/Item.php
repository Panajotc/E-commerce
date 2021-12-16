<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $name;
    public $imag;
    public $code;
    public $pric;
    public function mount($pric,$code,$name,$imag){
        $this->name1=$name;
        $this->imag1=$imag;
        $this->code1=$code;
        $this->pric1=$pric;
    }
    public function render()
    {
        return view('livewire.item');
    }
}
