<div>
    <!-- HEADER -->
    <x-mary-header title="Lojas" separator progress-indicator class="p-5">
        <x-slot:actions>
            <x-mary-button label="Cadastrar loja" icon-right="" class="btn-success text-white dark:text-black" link="{{ route('stores.create') }}" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:stores-list/>
    </x-mary-card>
</div>
