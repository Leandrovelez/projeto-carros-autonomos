<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Warehouses extends Component
{
    use WithPagination;
    public $warehouses;

    public function mount()
    {
        $warehouses = \App\Models\Warehouse::paginate(10);

        $this->warehouses = $warehouses->map(function ($record) {
            $record->is_active = $record->is_active ? 'Ativo' : 'Inativo';
            return $record;
        });
    }

    public function render()
    {
        return view('livewire.warehouses')->layout('layouts.app');
    }
}
