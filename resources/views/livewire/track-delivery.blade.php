<div>
    <!-- HEADER -->
    <x-mary-header title="Rastrear entrega" separator progress-indicator class="p-5"></x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
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

    <img src="{{ asset('images/maps.png') }}" alt="" class="mt-4">
</div>
