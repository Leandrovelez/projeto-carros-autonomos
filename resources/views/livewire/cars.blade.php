<div>
    <!-- HEADER -->
    <x-mary-header title="Carros" separator progress-indicator class="p-5">
        <x-slot:actions>
            <x-mary-button label="Cadastrar carro" icon-right="" class="btn-success text-white dark:text-black" link="{{ route('cars.create') }}" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:cars-list/>
    </x-mary-card>
</div>
