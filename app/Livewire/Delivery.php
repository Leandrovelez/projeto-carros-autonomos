<?php

namespace App\Livewire;

use App\Models\Occurencie;
use Livewire\Component;

class Delivery extends Component
{
    public $listeners = ['TrackDelivery', 'OccurencieShow'];

    public function render()
    {
        return view('livewire.delivery')->layout('layouts.app');
    }

    public function TrackDelivery($deliveryId)
    {
        return redirect()->route('delivery.track', ["id" => $deliveryId]);
    }
    
    public function OccurencieShow($deliveryId)
    {
        $occurencie = Occurencie::whereEntregaId($deliveryId)->first();
        return redirect()->route('occurencies.show', ["id" => $occurencie->id]);
    }
}
