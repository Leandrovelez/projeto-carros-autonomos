<?php

namespace App\Livewire;

use Livewire\Component;

class WarehousesForm extends Component
{
    public function render()
    {
        return view('livewire.warehouses-form')->layout('layouts.app');
    }
}
