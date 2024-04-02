<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class EventTable extends PowerGridComponent
{

    public bool $showFilters = true;
    public bool $multiSort = true;
    public int $perPage = 10;
    public array $perPageValues = [0, 5, 10, 20, 50];


    public function setUp(): array
    {
        $this->persist(['columns', 'filters']);

        return [

            Header::make()
                ->showToggleColumns()
                ->showSearchInput(),

            Footer::make()
                ->showPerPage($this->perPage, $this->perPageValues)
                ->showRecordCount(),

        ];
    }

    public function datasource(): Builder
    {
        return Event::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('title')
            ->add('startDate')
            ->add('endDate')
            ->add('noOfTeams')
            ->add('location')
            ->add('deadline')
            ->add('fees')
            ->add('created_at')
            ->add('updated_at');
    }

    public function columns(): array
    {
        return [
            Column::action('Action'),
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('Title', 'title')
                ->sortable()
                ->searchable(),
            Column::make('Start Date', 'startDate')
                ->sortable(),
            Column::make('End Date', 'endDate')
                ->sortable(),
            Column::make('No Of Teams', 'noOfTeams')
                ->sortable(),
            Column::make('Location', 'location')
                ->sortable()
                ->searchable(),
            Column::make('Deadline', 'deadline')
                ->sortable(),
            Column::make('Fees', 'fees')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
            Column::make('Updated at', 'updated_at')
                ->sortable(),


        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Event $row): array
    {
        return [
            Button::add('view')
                //->slot('Edit: ' . $row->id)
                ->slot('View')
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->route('event.edit', ['event' => $row])
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
