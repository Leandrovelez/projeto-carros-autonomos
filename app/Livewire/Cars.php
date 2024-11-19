<?php

namespace App\Livewire;

use Livewire\Component;

class Cars extends Component
{
    public $listeners = ['TrackCar'];

    public function render()
    {
        return view('livewire.cars')->layout('layouts.app');
    }

    public function TrackCar($carId)
    {
        return redirect()->route('cars.track', ["id" => $carId]);
    }
}
