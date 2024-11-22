<?php

namespace App\Livewire;

use App\Models\Delivery;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class DeliveryList extends PowerGridComponent
{
    public string $tableName = 'delivery-list-argds9-table';

    public function setUp(): array
    {
        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Delivery::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('endereco_entrega')
            ->add('nome_destinatario')
            ->add('garagem_id')
            ->add('armazem_id')
            ->add('status')
            ->add('comentario');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->hidden(),

            Column::make('Endereço', 'endereco_entrega')
                ->searchable()
                ->sortable(),

            Column::make('Destinatário', 'nome_destinatario')
                ->searchable()
                ->sortable(),

            // Column::make('Garagem', 'garagem_id')
            //     ->searchable()
            //     ->sortable(),

            // Column::make('Armazem', 'armazem_id')
            //     ->searchable()
            //     ->sortable(),

            Column::make('Status', 'status')
                ->searchable()
                ->sortable(),
                //->bodyAttribute('text-left', 'color:red'),

            Column::make('Compartimento', 'compartimento')
                ->searchable()
                ->sortable(),

            Column::action('Ações')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Delivery $row): array
    {
        if($row->status != 'Falha'){
            return [
                Button::add('show')
                    ->slot('<x-mary-input class="bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 "> 
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>')
                    ->id()
                    ->class('bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 text-white dark:text-black font-bold py-2 px-4 rounded')
                    ->dispatchTo('delivery', 'TrackDelivery', ['deliveryId' => $row->id]),
            ];
        } else {
            return [
                Button::add('show')
                    ->slot('<x-mary-input class="bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 "> 
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>')
                    ->id()
                    ->class('bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 text-white dark:text-black font-bold py-2 px-4 rounded')
                    ->dispatchTo('delivery', 'TrackDelivery', ['deliveryId' => $row->id]),

                
                Button::add('occurencie')
                    ->slot('<x-mary-input class="bg-red-500 dark:bg-red-800 hover:bg-red-700 "> 
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                            </svg>
                            ')
                    ->id()
                    ->class('bg-red-500 dark:bg-red-800 hover:bg-red-700 text-white dark:text-black font-bold py-2 px-4 rounded')
                    ->dispatchTo('delivery', 'OccurencieShow', ['deliveryId' => $row->id]),
            ];
        }
        
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
