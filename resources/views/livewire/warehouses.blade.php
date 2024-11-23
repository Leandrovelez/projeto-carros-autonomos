<div>
    <!-- HEADER -->
    <x-mary-header title="Armazéns" separator progress-indicator class="p-5">
        <x-slot:actions>
            <x-mary-button label="Cadastrar armazém" icon-right="" class="btn-success text-white dark:text-black" link="{{ route('warehouses.create') }}" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:warehouses-list/>
    </x-mary-card>
    <x-mary-icon hidden name="o-pencil-square" class=" hidden size-6 bg-blue-500 dark:bg-blue-800 hover:bg-blue-700 text-white dark:text-black" title="Excluir" />
    <x-mary-icon hidden name="o-pencil-square" class=" hidden size-6 bg-red-500 dark:bg-red-800 hover:bg-red-700 text-white dark:text-black" title="Excluir" />

    <!-- <x-mary-card class="dark:bg-slate-900">
        @php
        
            $headers = [
                ['key' => 'nome', 'label' => 'Nome'],
                ['key' => 'cidade', 'label' => 'Cidade'],
                ['key' => 'estado', 'label' => 'Estado'], 
                ['key' => 'is_active', 'label' => 'Status'], 
                ['key' => 'Ações', 'label' => 'Ações'], 
            ];
        @endphp
 
        <x-mary-table :headers="$headers" :rows="$warehouses" striped  >
            @scope('cell_is_active', $warehouse)
                <x-mary-badge :value="$warehouse->is_active" class="bg-red" with-pagination />
            @endscope
        </x-mary-table>
    </x-mary-card> -->
</div>
