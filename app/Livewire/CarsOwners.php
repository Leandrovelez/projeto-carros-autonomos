<?php

namespace App\Livewire;

use Livewire\Component;

class CarsOwners extends Component
{
    public function render()
    {
        return view('livewire.cars-owners')->layout('layouts.app');
    }
}
