<?php

namespace Database\Factories;

use App\Models\Classe;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Classe::class;

    public function definition()
    {
        return [
            'idformation' => Formation::factory(),
            'libelle' => $this->faker->sentence(2),
            'NombreMax' => $this->faker->numberBetween(10, 30),
        ];
    }
}
