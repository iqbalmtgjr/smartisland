<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $keranjang = 0;

    public function render()
    {
        return view('livewire.belajar')->layout('belajar');
    }

    public function plus()
    {
        $this->keranjang++;
    }

    public function minus()
    {
        $this->keranjang--;
    }
}
