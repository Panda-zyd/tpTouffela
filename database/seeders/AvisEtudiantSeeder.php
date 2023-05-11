<?php

namespace Database\Seeders;

use App\Models\Avis;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvisEtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formations = Formation::all();

        foreach ($formations as $formation) {
            Avis::factory()
                ->count(1) // create 5 classes per formation
                ->create([
                    'idf' => $formation->idf,
                ]);
        }

        $etudiants = Etudiant::all();

        foreach ($etudiants as $etudiant) {
            Avis::factory()
                ->count(1) // create 5 classes per formation
                ->create([
                    'idE' => $etudiant->codeE,
                ]);
        }
    }
}
