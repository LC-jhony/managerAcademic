<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careers = [
            'Computación e Informatica',
            'Enfermería Tecnica',
            'Produccion Agropecuaria',
        ];
        foreach ($careers as $career) {
            Departament::create([
                'name' => $career,
            ]);
        }
    }
}
