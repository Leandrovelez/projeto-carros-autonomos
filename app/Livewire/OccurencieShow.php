<?php

namespace App\Livewire;

use App\Models\Occurencie;
use Livewire\Component;

class OccurencieShow extends Component
{
    public $occurencie;

    public function render()
    {
        return view('livewire.occurencie-show')->layout('layouts.app');
    }

    public function mount($id)
    {
        $this->occurencie = Occurencie::find($id);
    }
}
