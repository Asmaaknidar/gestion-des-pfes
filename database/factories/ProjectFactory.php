<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Professor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'professor_id' => Professor::all()->random()->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'sector' => $this->faker->randomElement(['SSI', 'SSE', 'GL','BI&A','GD','2Scl','IDF','IA']),
            'level' => $this->faker->randomElement(['1A', '2A', '3A']),
            'Lieu_soutenance' => $this->faker->city,
            'date_soutenance' => $this->faker->dateTimeBetween('+1 week', '+3 months'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
