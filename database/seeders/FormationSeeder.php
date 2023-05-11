<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the number of formations you want to create
        $numFormations = 25;

        // Use a factory to create each formation
        Formation::factory()->count($numFormations)->create();
    }
}
