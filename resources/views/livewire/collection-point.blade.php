<div>
    <!-- HEADER -->
    <x-mary-header title="Pontos de coleta" separator progress-indicator class="p-5">
        <x-slot:actions>
            <x-mary-button label="Cadastrar ponto de coleta" icon-right="" class="btn-success text-white dark:text-black" link="{{ route('collection-point.create') }}" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:colletion-point-list/>
    </x-mary-card>
</div>
