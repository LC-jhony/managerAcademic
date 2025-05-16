<?php

use App\Livewire\Admin\Departament;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Departament::class)
        ->assertStatus(200);
});
