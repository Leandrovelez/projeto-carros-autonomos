<div>
    <!-- HEADER -->
    <x-mary-header title="Rastrear entrega" separator progress-indicator class="p-5"></x-mary-header>
    <div class="flex">
        <x-mary-card class="dark:bg-slate-900 w-1/3">
            <x-mary-timeline-item title="Pedido confirmado" first />
        
            <x-mary-timeline-item title="Aguardando retirada no armazém" subtitle="10/23/2023" />
            
            <x-mary-timeline-item title="Em rota de entrega" subtitle="10/23/2023" description="Última atualização há 1 min" />
            
            {{-- Notice `pending` --}}
            <x-mary-timeline-item title="Chegou no bairro" pending description="Pronto para entregar" />
            
            {{-- Notice `pending` --}}
            <x-mary-timeline-item title="Carro chegou no endereço" pending description="Aguardando retirada do pedido" />
            
            {{-- Cut bottom edge with `last` --}}
            <x-mary-timeline-item title="Entrega" pending last description="Pedido entregue :)" />
        </x-mary-card>
        <div class="w-2/3 pl-4">
            <img src="{{ asset('images/maps.png') }}" alt="" class="rounded" width="100%" height="100%">
        </div>
        
    </div>
    <div class="container mx-auto px-4 flex justify-between">
        
    </div>
</div>
