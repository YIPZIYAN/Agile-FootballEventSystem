<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Event;

class EventTable extends DataTableComponent
{
    protected $model = Event::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->hideIf(false),
            Column::make("Title", "title")
                ->sortable()
                ->searchable(),
            Column::make("Start Date", "startDate")
                ->sortable(),
            Column::make("End Date", "endDate")
                ->sortable(),
            Column::make("No Of Teams", "noOfTeams")
                ->sortable(),
            Column::make("Location", "location")
                ->sortable(),
            Column::make("Deadline", "deadline")
                ->sortable(),
            Column::make("Fees", "fees")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
