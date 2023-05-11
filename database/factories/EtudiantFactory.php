<?php

namespace Database\Factories;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Etudiant::class;
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->lastName,
            'adresse' => $this->faker->address,
            'dateNaissance' => $this->faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'idclasse'=> Classe::factory()
        ];
    }
}
