<?php

namespace App\Livewire;

use Livewire\Component;

class CarsForm extends Component
{
    public function render()
    {
        return view('livewire.cars-form')->layout('layouts.app');
    }
}
