<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Departament as ModelDepartament;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\DepartamentForm;
use PhpParser\Node\Stmt\TryCatch;
use WireUi\Traits\WireUiActions;

class Departament extends Component
{
    use WireUiActions;
    public $showIngDepartamentDrawer = false;
    public $isEditMode = false;
    public DepartamentForm $form;
    protected $listeners = [
        'edit-departament' => 'showEditDepartamentDrawer',
        'delete-departament' => 'confirmDeleteDepartament'
    ];
    public function showDepartamentDrawer(): void
    {
        $this->resetValidation();
        $this->showIngDepartamentDrawer = true;
    }
    public function save()
    {
        $this->form->store();
        $this->reset('showIngDepartamentDrawer');
        $this->reset();
    }

    public function showEditDepartamentDrawer($id): void
    {
        $this->form->departament = ModelDepartament::findOrFail($id);
        $this->form->name = $this->form->departament->name;
        $this->isEditMode = true;
        $this->showIngDepartamentDrawer = true;
        $this->reset();
    }
    public function update()
    {
        $this->form->updated();
        $this->reset();
        $this->redirect(route('departament.form'));
    }
    public function confirmDeleteDepartament($id)
    {
        $departament = ModelDepartament::findOrFail($id);
        $departament->delete();
        $this->reset();
        $this->redirect(route('departament.form'));
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.departament');
    }
}
