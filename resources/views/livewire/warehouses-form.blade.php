<div>
    <!-- HEADER -->
    <x-mary-header title="Novo armazém" separator progress-indicator class="p-5"></x-mary-header>
    <x-mary-form wire:submit.prevent="update" no-separator class="p-5">
    <div class="grid gap-4 grid-cols-1">
            <div class="w-full">
                <x-mary-input label="{{ __('Nome') }}" wire:model="displayname" wire:model.lazy="displayname" class="mb-4"/>
            </div>
        </div>
        <div class="grid gap-4 grid-cols-2">
            <div class="w-full">
                <strong class="mb-4">{{ __('Informações de endereço') }}</strong>
                <x-mary-input label="{{ __('CEP') }}" wire:model="cep" wire:model.lazy="cep" class="mb-4"/>
            </div>
        </div>
        <div class="grid gap-4 grid-cols-2">
            <x-mary-input label="{{ __('Rua') }}" wire:model="rua" wire:model.lazy="rua" class="mb-4"/>
            <x-mary-input label="{{ __('Número') }}" wire:model="numero" wire:model.lazy="numero" class="mb-4" id="telefoneInput"/> 
        </div>
        <div class="grid gap-4 grid-cols-3">
            <x-mary-input label="{{ __('Bairro') }}" wire:model="bairro" wire:model.lazy="bairro" class="mb-4"/>
            <x-mary-input label="{{ __('Cidade') }}" wire:model="cidade" wire:model.lazy="cidade" class="mb-4" id="telefoneInput"/> 
            <x-mary-input label="{{ __('Estado') }}" wire:model="estado" wire:model.lazy="estado" class="mb-4" id="telefoneInput"/> 
        </div>
        <x-slot:actions>
            <x-mary-button label="Cancelar" link="{{ route('warehouses.index') }}" />
            <x-mary-button label="Salvar" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
