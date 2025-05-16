<?php

namespace App\Livewire;

use App\Models\Departament;
use Livewire\Attributes\On;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class DepartamentTable extends DataTableComponent
{
    protected $model = Departament::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function editDepartament($id)
    {
        $this->dispatch('edit-departament', $id);
        $this->redirect(route('departament.form'));
    }


    public function confirmedDeleteDepartament($id)
    {
        $this->dispatch('delete-departament', $id);
        $this->redirect(route('departament.form'));
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("name", "name"),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make("Accion")
                ->label(
                    fn($row) => view('table.actions', compact('row'))
                )
        ];
    }
}
