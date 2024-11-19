<div>
    <!-- HEADER -->
    <x-mary-header title="Novo carro" separator progress-indicator class="p-5"></x-mary-header>
    <x-mary-form wire:submit.prevent="update" no-separator class="p-5">
    <div class="grid gap-4 grid-cols-1">
            <div class="w-full">
                
            </div>
        </div>
        <div class="grid gap-4 grid-cols-3">
            <x-mary-input label="{{ __('Fabricante') }}" wire:model="fabricante" wire:model.lazy="fabricante" class="mb-4"/>
            <x-mary-input label="{{ __('Modelo') }}" wire:model="modelo" wire:model.lazy="modelo" class="mb-4"/>
            <x-mary-input label="{{ __('cor') }}" wire:model="cor" wire:model.lazy="cor" class="mb-4"/>
        </div>
        <div class="grid gap-4 grid-cols-3">
            <x-mary-input label="{{ __('Capacidade de carga') }}(kg)" wire:model="capacidade_carga" wire:model.lazy="capacidade_carga" class="mb-4"/> 
            <x-mary-input label="{{ __('Quantidade de compartimentos') }}" wire:model="bairro" wire:model.lazy="bairro" class="mb-4"/>
            <x-mary-input label="{{ __('Autonomia') }}" wire:model="cidade" wire:model.lazy="cidade" class="mb-4"/> 
        </div>
        <x-slot:actions>
            <x-mary-button label="Cancelar" link="{{ route('cars.index') }}" />
            <x-mary-button label="Salvar" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
