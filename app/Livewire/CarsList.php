<?php

namespace App\Livewire;

use App\Models\Car;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class CarsList extends PowerGridComponent
{
    public string $tableName = 'cars-list-nlkvic-table';

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
        return Car::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('fabricante')
            ->add('modelo')
            ->add('cor')
            ->add('capacidade_carga_kg')
            ->add('qtd_compartimentos')
            ->add('autonomia_km');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
            ->searchable()
            ->hidden(),

            Column::make('Fabricante', 'fabricante')
                ->searchable()
                ->sortable(),
            Column::make('Modelo', 'modelo')
                ->searchable()
                ->sortable(),
            Column::make('Cor', 'cor')
                ->searchable()
                ->sortable(),
            Column::make('Capacidade de Carga (kg)', 'capacidade_carga_kg')
                ->searchable()
                ->sortable(),
            Column::make('Qtd Compartimentos', 'qtd_compartimentos')
                ->searchable()
                ->sortable(),
            Column::make('Autonomia (km)', 'autonomia_km')
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

    public function actions(Car $row): array
    {
        return [
            Button::add('edit')
            ->slot('<x-mary-input class="bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 "> 
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>')
            ->id()
            ->class('bg-amber-500 dark:bg-amber-800 hover:bg-amber-700 text-white dark:text-black font-bold py-2 px-4 rounded')
            ->dispatchTo('cars', 'TrackCar', ['carId' => $row->id]),

            Button::add('edit')
                ->slot('<x-mary-input> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </x-mary-input>')
                ->id()
                ->class('bg-blue-500 dark:bg-blue-800 hover:bg-blue-700 text-white dark:text-black font-bold py-2 px-4 rounded')
                ->dispatchTo('mailbox', 'edit', ['mailbox' => $row->mail]),
            
            Button::add('delete')
                ->slot('<x-mary-input> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                    </x-mary-input>')
                ->id()
                ->class('bg-red-500 dark:bg-red-800 hover:bg-red-700 text-white dark:text-black font-bold py-2 px-4 rounded')
                ->dispatchTo('mailbox', 'confirmDelete', ['mailbox' => $row->mail ] )
        ];
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
