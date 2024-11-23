<div>
    <!-- HEADER -->
    <x-mary-header title="Rastrear entrega" separator progress-indicator class="p-5"></x-mary-header>
    <div class="flex">
        <div class="w-1/3">
            <x-mary-card class="dark:bg-slate-900">
                <x-mary-header title="Status" subtitle="" separator />
                
                <x-mary-timeline-item title="Pedido confirmado" first />
            
                <x-mary-timeline-item title="Aguardando retirada no armazém" subtitle="10/23/2023" />
                
                <x-mary-timeline-item title="Em rota de entrega" subtitle="10/23/2023" description="Última atualização há 1 min" />
                
                @if($delivery->status == 'Entregue') 
                    {{-- Notice `pending` --}}
                    <x-mary-timeline-item title="Chegou no bairro" description="Pronto para entregar" />
                    
                    {{-- Notice `pending` --}}
                    <x-mary-timeline-item title="Carro chegou no endereço" description="Aguardando retirada do pedido" />
                    
                    {{-- Cut bottom edge with `last` --}}
                    <x-mary-timeline-item title="Entrega" last description="Pedido entregue :)" />
                @else
                    <x-mary-timeline-item title="Chegou no bairro" pending description="Pronto para entregar" />
                    
                    {{-- Notice `pending` --}}
                    <x-mary-timeline-item title="Carro chegou no endereço" pending description="Aguardando retirada do pedido" />
                    
                    {{-- Cut bottom edge with `last` --}}
                    <x-mary-timeline-item title="Entrega" pending last description="Pedido entregue :)" />
                @endif
            </x-mary-card>

            <x-mary-card class="dark:bg-slate-900 mt-4">
                <x-mary-header title="Dados da entrega" subtitle="" separator />
                <div class="grid grid-cols-2 gap-4">
                    <div class="">
                        <p class="mt-2">
                            <strong>Endereço: </strong> 
                        </p>
                        <p class="mt-2">
                            <strong>Data: </strong> 
                        </p>
                        <p class="mt-2">
                            <strong>Compartimento: </strong>
                        </p>
                        <p class="mt-2">
                            <strong>Tentativa nº: </strong>
                        </p>
                        <p class="mt-2">
                            <strong>Status: </strong>
                        </p>
                    </div>
                    
                    <div class="justify-content-start">
                        <p class="mt-2">
                            {{ $delivery->endereco_entrega }}
                        </p>
                        @if($delivery->status == 'Entregue')
                            <p class="mt-2">
                                {{ Illuminate\Support\Carbon::parse($delivery->created_at)->format('d/m/Y H:i:s') }}
                            </p>
                        @else
                            <p class="mt-2">
                                {{ Illuminate\Support\Carbon::parse($delivery->updated_at)->format('d/m/Y') }}
                            </p>
                        @endif
                        <p class="mt-2">
                            {{ $delivery->compartimento }}
                        </p>
                        <p class="mt-2">
                            {{ $delivery->tentativa }}
                        </p>
                        @if($delivery->status == 'Falha')
                            <p class="mt-2">
                                <button class="outline outline-offset-2 outline-red-500 text-red-600 dark:text-red-400 rounded" link="{{route('occurencies.show', $occurencie->id)}}">{{$delivery->status}}</button>
                            </p>
                        @else
                            <p class="mt-2">
                                <button class="outline outline-offset-2 outline-green-500 text-green-600 dark:text-green-400 rounded">{{$delivery->status}}</button>
                            </p>
                        @endif
                    </div>
                </div>
                
            </x-mary-card>
        </div>
        
        <div class="w-2/3 pl-4">
            <x-mary-card class="dark:bg-slate-900">
                <x-mary-header title="Acompanhamento em tempo real" subtitle="Última atualização: há 1 minuto" separator />
                @if($delivery->status == "Entregue")
                    <x-mary-header title="Entrega finalizada!" subtitle="Dados de rastreamento indisponíveis" />
                @elseif($delivery->status == "Falha")
                <x-mary-header title="Falha na entrega" subtitle="Dados de rastreamento indisponíveis. Verifique a ocorrência para mais detalhes." />
                @else
                    <div class=" flex justify-center">
                        <img src="{{ asset('images/maps.png') }}" alt="" class="rounded" width="100%" height="100%">
                    </div>
                @endif
            </x-mary-card>
            @if($delivery->status == "Falha")
                <x-mary-card class="dark:bg-slate-900 mt-4">
                    <x-mary-header title="Dados da ocorrência" subtitle="" separator />
                    <div class="grid grid-cols-2 gap-4">
                        <div class="w-1/6">
                            <p class="mt-2">
                                <strong>Local: </strong> 
                            </p>
                            <p class="mt-2">
                                <strong>Data: </strong> 
                            </p>
                            <p class="mt-2">
                                <strong>Tipo: </strong>
                            </p>
                        </div>
                        
                        <div class="w-5/6 justify-content-start">
                            <p class="mt-2">
                                {{ $occurencie->endereco }}
                            </p>
                            <p class="mt-2">
                                {{ Illuminate\Support\Carbon::parse($occurencie->created_at)->format('d/m/Y H:i:s') }}
                            </p>
                            <p class="mt-2">
                                <x-mary-button class="outline outline-offset-2 outline-red-500 text-red-600 dark:text-red-400 rounded" link="{{route('occurencies.show', $occurencie->id)}}">{{$occurencie->tipo}}</x-mary-button>
                            </p>
                        </div>
                    </div>
                    
                </x-mary-card>
            @endif
            @if($delivery->status == "Entregue")
                <x-mary-card class="dark:bg-slate-900 mt-4">
                    <x-mary-header title="Receptor" subtitle="" separator />
                    <div class=" flex justify-center">
                        <img src="{{ asset('images/user.jpg') }}" alt="" class="rounded" width="40%" height="auto">
                    </div>
                </x-mary-card>
            @endif
        </div>
        
    </div>
    <div class="container mx-auto px-4 flex justify-between">
        
    </div>
</div>
