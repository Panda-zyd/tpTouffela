<?php

namespace Database\Seeders;

use App\Models\Classe;
use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $formations = Formation::all();

        foreach ($formations as $formation) {
            Classe::factory()
                ->count(1) // create 5 classes per formation
                ->create([
                    'idformation' => $formation->idf,
                ]);
        }
    }
}
