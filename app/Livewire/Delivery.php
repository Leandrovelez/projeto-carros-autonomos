<?php

namespace App\Livewire;

use Livewire\Component;

class Delivery extends Component
{
    public $listeners = ['TrackDelivery'];

    public function render()
    {
        return view('livewire.delivery')->layout('layouts.app');
    }

    public function TrackDelivery($deliveryId)
    {
        return redirect()->route('delivery.track', ["id" => $deliveryId]);
    }
}
