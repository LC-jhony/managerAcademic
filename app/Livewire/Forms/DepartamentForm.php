<?php

namespace App\Livewire\Forms;

use App\Models\Departament;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DepartamentForm extends Form
{
    public ?Departament $departament;
    #[Validate('required')]
    public $name;

    public function store()
    {
        $this->validate();
        Departament::create($this->all());
    }
    public function updated()
    {
        $this->validate();
        $this->departament->update($this->all());
    }
}
