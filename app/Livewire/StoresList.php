<?php

namespace App\Livewire;

use App\Models\Store;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class StoresList extends PowerGridComponent
{
    public string $tableName = 'stores-list-yvlysl-table';

    public function datasource(): Collection
    {
        $stores = User::whereTipo('vendedor')->get();

        return collect($stores);
    }

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

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y');
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),
                
            Column::make('CNPJ', 'document')
            ->searchable()
            ->sortable(),

            Column::make('E-mail', 'email')
                ->sortable(),

            Column::make('Data criação', 'created_at_formatted'),

            Column::action('Action')
        ];
    }

    
    public function actions(user $row): array
    {
        return [
            Button::add('edit')
                ->slot('<x-mary-input class="size-6 bg-blue-500 dark:bg-blue-800 hover:bg-blue-700 text-white dark:text-black" icon="o-pencil-square"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-blue-500 dark:bg-blue-800 hover:bg-blue-700 text-white dark:text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </x-mary-input>')
                ->id()
                ->class('bg-blue-500 dark:bg-blue-800 hover:bg-blue-700 text-white dark:text-black font-bold py-2 px-4 rounded'),
                //->dispatchTo('mailbox', 'edit', ['mailbox' => $row->mail]),
            
            Button::add('delete')
                ->slot('<x-mary-input class="bg-red-500 dark:bg-red-800 hover:bg-red-700"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                    </x-mary-input>')
                ->id()
                ->class('bg-red-500 dark:bg-red-800 hover:bg-red-700 text-white dark:text-black font-bold py-2 px-4 rounded'),
                //->dispatchTo('mailbox', 'confirmDelete', ['mailbox' => $row->mail ] ),
        ];
    }
}
