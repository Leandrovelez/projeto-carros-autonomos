<div>
    <!-- HEADER -->
    <x-mary-header title="Informações da occorrência" separator progress-indicator class="p-5"></x-mary-header>
    <div class="flex">
        <div class="w-1/3">
            <x-mary-card class="dark:bg-slate-900">
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
                            <button class="outline outline-offset-2 outline-red-500 text-red-600 dark:text-red-400 rounded">{{$occurencie->tipo}}</button>
                        </p>
                    </div>
                </div>
                
            </x-mary-card>

            <x-mary-card class="dark:bg-slate-900 mt-4">
                <x-mary-header title="Foto tirada" subtitle="" separator />
                <div class=" flex justify-center">
                    <img src="{{ asset('images/user.jpg') }}" alt="" class="rounded" width="80%" height="auto">
                </div>
            </x-mary-card>
        </div>
        
        <div class="w-2/3 pl-4">
            <img src="{{ asset('images/maps.png') }}" alt="" class="rounded" width="100%" height="100%">
        </div>
        
    </div>
    <div class="container mx-auto px-4 flex justify-between">
        
    </div>
</div>
