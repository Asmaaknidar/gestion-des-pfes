<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Group;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'password' => bcrypt('password'), // Assure-toi de modifier le mot de passe par défaut
            'nb_etudiant' => $this->faker->numberBetween(1, 10),
            'encadrant_id' => null,
            'project_id' => null,
            'sector' => $this->faker->randomElement(['SSI', 'SSE', 'GL','BI&A','GD','2Scl','IDF','IA']),
            'level' => $this->faker->randomElement(['1A', '2A', '3A']),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
};
