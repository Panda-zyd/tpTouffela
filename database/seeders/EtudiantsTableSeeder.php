<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classess = Classe::all();

        foreach ($classess as $classes) {
            Etudiant::factory()
                ->count(1) // create 5 classes per formation
                ->create([
                    'idclasse' => $classes->idc,
                ]);
        }
    }
}
