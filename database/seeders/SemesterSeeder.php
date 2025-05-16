<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 6 semestres (3 años académicos)
        $currentYear = Carbon::now()->year;

        // Primer año
        Semester::create([
            'name' => $currentYear . '-I',
            'start_date' => Carbon::createFromDate($currentYear, 4, 1),
            'end_date' => Carbon::createFromDate($currentYear, 7, 31),
            'status' => 'closed',
        ]);

        Semester::create([
            'name' => $currentYear . '-II',
            'start_date' => Carbon::createFromDate($currentYear, 9, 1),
            'end_date' => Carbon::createFromDate($currentYear, 12, 24),
            'status' => 'current',
        ]);

        // Segundo año
        Semester::create([
            'name' => ($currentYear + 1) . '-I',
            'start_date' => Carbon::createFromDate($currentYear + 1, 4, 1),
            'end_date' => Carbon::createFromDate($currentYear + 1, 7, 31),
            'status' => 'upcoming',
        ]);

        Semester::create([
            'name' => ($currentYear + 1) . '-II',
            'start_date' => Carbon::createFromDate($currentYear + 1, 9, 1),
            'end_date' => Carbon::createFromDate($currentYear + 1, 12, 24),
            'status' => 'upcoming',
        ]);

        // Tercer año
        Semester::create([
            'name' => ($currentYear + 2) . '-I',
            'start_date' => Carbon::createFromDate($currentYear + 2, 4, 1),
            'end_date' => Carbon::createFromDate($currentYear + 2, 7, 31),
            'status' => 'upcoming',
        ]);

        Semester::create([
            'name' => ($currentYear + 2) . '-II',
            'start_date' => Carbon::createFromDate($currentYear + 2, 9, 1),
            'end_date' => Carbon::createFromDate($currentYear + 2, 12, 24),
            'status' => 'upcoming',
        ]);
    }
}
