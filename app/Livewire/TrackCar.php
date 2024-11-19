<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class TrackCar extends Component
{
    public $car;

    public function render()
    {
        return view('livewire.track-car')->layout('layouts.app');
    }

    public function mount($id)
    {
        $this->car = Car::find($id);
    }
}
