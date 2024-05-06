<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Assure-toi de modifier le mot de passe par défaut
            'sector' => $this->faker->randomElement(['SSI', 'SSE', 'GL','BI&A','GD','2Scl','IDF','IA']), // Choix aléatoire parmi les secteurs
            'level' => $this->faker->randomElement(['1A', '2A', '3A']), // Choix aléatoire parmi les niveaux
            'project_id' => null, // Laisse le project_id vide par défaut
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
