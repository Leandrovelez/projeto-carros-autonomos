<?php

namespace App\Livewire;

use Livewire\Component;

class Occurencies extends Component
{
    public $listeners = ['OccurencieShow'];

    public function render()
    {
        return view('livewire.occurencies')->layout('layouts.app');
    }

    public function OccurencieShow($id)
    {
        return redirect()->route('occurencies.show', ["id" => $id]);
    }
}
