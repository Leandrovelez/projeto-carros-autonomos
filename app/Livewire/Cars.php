<?php

namespace App\Livewire;

use Livewire\Component;

class Cars extends Component
{
    public function render()
    {
        return view('livewire.cars')->layout('layouts.app');
    }
}
