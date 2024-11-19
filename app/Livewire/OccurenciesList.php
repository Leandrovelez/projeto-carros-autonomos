<?php

namespace App\Livewire;

use App\Models\Occurencie;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class OccurenciesList extends PowerGridComponent
{
    public string $tableName = 'occurencies-list-a9mloi-table';

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
        return Occurencie::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y H:i:s');
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->hidden(),

            Column::make('Localização', 'endereco')
                ->searchable()
                ->sortable(),
            
            Column::make('Tipo', 'tipo')
                ->searchable()
                ->sortable(),
                
            Column::make('Data', 'created_at_formatted')
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

    public function actions(Occurencie $row): array
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
            ->dispatchTo('occurencies', 'OccurencieShow', ['id' => $row->id]),
        ];
    }
}
