<?php

namespace App\Livewire;

use App\Models\Delivery;
use App\Models\Occurencie;
use Livewire\Component;

class TrackDelivery extends Component
{
    public $delivery;
    public $occurencie;

    public function render()
    {
        return view('livewire.track-delivery')->layout('layouts.app');
    }

    public function mount($id){
        $this->delivery = Delivery::find($id);

        if($this->delivery->status == 'Falha'){
            $this->occurencie = Occurencie::whereEntregaId($id)->first();
        }
    }
}
