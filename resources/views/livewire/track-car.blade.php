<div>
    <!-- HEADER -->
    <x-mary-header title="Informações e rastreio do carro" separator progress-indicator class="p-5"></x-mary-header>
    <div class="flex">
        <div class="w-1/3">
            <x-mary-card class="dark:bg-slate-900">
                <x-mary-header title="Dados do carro" subtitle="" separator />
                <div class="grid grid-cols-2 gap-4">
                    <div class="w-1/2">
                    <p class="mt-2">
                        <strong>Fabricante: </strong> 
                    </p>
                    <p class="mt-2">
                        <strong>Modelo: </strong> 
                    </p>
                    <p class="mt-2">
                        <strong>Cor: </strong> 
                    </p>
                    <p class="mt-2">
                        <strong>Capacidade de carga: </strong> 
                    </p>
                    <p class="mt-2">
                        <strong>Autonomia: </strong>
                    </p>
                    <p class="mt-2">
                        <strong>Nível de bateria: </strong>
                    </p>
                    <p class="mt-2">
                        <strong>Status: </strong>
                    </p>
                    </div>
                    
                    <div class="w-1/2">
                    <p class="mt-2">
                        {{ $car->fabricante }}
                    </p>
                    <p class="mt-2">
                        {{ $car->modelo }}
                    </p>
                    <p class="mt-2">
                        {{ $car->cor }}
                    </p>
                    <p class="mt-2">
                        {{ $car->capacidade_carga_kg }} (kg)
                    </p>
                    <p class="mt-2">
                        {{ $car->autonomia_km }} (km)
                    </p>
                    <p class="mt-2">
                        90%
                    </p>
                    <p class="mt-2">
                        <button class="outline outline-offset-2 outline-blue-500 text-blue-600 dark:text-blue-400 rounded">Em rota de entrega</button>
                    </p>
                    </div>
                </div>
                
            </x-mary-card>

            <x-mary-card class="dark:bg-slate-900 mt-4">
                <x-mary-header title="Etapas da entrega" subtitle="" separator />
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
        </div>
        
        <div class="w-2/3 pl-4">
            <img src="{{ asset('images/maps.png') }}" alt="" class="rounded" width="100%" height="100%">
        </div>
        
    </div>
    <div class="container mx-auto px-4 flex justify-between">
        
    </div>
</div>
