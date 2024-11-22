<div>
    <!-- HEADER -->
    <x-mary-header title="Entregas" separator progress-indicator class="p-5"></x-mary-header>
    <x-mary-card class="dark:bg-slate-900">
        <livewire:delivery-list/>
    </x-mary-card>
    <x-mary-icon hidden name="o-pencil-square" class=" hidden size-6 bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 text-white dark:text-black" title="Excluir" />
    <x-mary-icon  name="o-pencil-square" class=" hidden size-6 bg-red-500 dark:bg-red-800 hover:bg-red-700 text-white dark:text-black" title="Excluir" />
</div>
