<?php

namespace App\Livewire\Admin\Semester;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Semester extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.semester.semester');
    }
}
