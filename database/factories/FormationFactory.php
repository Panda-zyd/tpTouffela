<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formations>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Formation::class;
    public function definition()
    {
        return [
            'Titre' => $this->faker->sentence(),
            'NbreHeure' => $this->faker->numberBetween(10, 50),
        ];
    }
}
