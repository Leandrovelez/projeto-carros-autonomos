<div>
    <!-- HEADER -->
    <x-mary-header title="Garagens" separator progress-indicator class="p-5">
        <x-slot:actions>
            <x-mary-button label="Cadastrar garagem" icon-right="" class="btn-success text-white dark:text-black" link="{{ route('garages.create') }}" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:garages-list/>
    </x-mary-card>
</div>
