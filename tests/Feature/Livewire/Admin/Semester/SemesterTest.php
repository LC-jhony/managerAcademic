<?php

use App\Livewire\Admin\Semester\Semester;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Semester::class)
        ->assertStatus(200);
});
