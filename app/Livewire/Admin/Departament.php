<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Departament as ModelDepartament;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\DepartamentForm;
use PhpParser\Node\Stmt\TryCatch;

class Departament extends Component
{
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
        try {
            $this->form->store();
            $this->reset();
            $this->redirect(route('departament.form'));
        } catch (\Exception $e) {
            $this->emit('error', $e->getMessage());
        }
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
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.departament');
    }
}
