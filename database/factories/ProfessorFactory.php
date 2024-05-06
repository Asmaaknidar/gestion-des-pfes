<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Définis des spécialités pour chaque filière
        $specialties = [
            'SSI' => ['Cybersécurité', 'Développement Web', 'Ingénierie Réseau'],
            'SSE' => ['Intelligence Artificielle', 'Systèmes Embarqués'],
            'GD' => ['Design Graphique', 'Infographie', 'Animation 3D'],
            'GL' => ['Développement Logiciel', 'Génie Logiciel'],
            '2SCL' => ['Sciences Cognitives', 'Langage et Communication'],
            'IDF' => ['Développement d\'Applications Mobiles', 'Intégration Continue'],
            'IA' => ['Apprentissage Automatique', 'Traitement du Langage Naturel']
        ];

        // Choisis une filière aléatoire
        $filiere = $this->faker->randomElement(['SSI', 'SSE', 'GD', 'GL', '2SCL', 'IDF', 'IA']);

        // Choisis une spécialité aléatoire de la filière choisie
        $specialty = $this->faker->randomElement($specialties[$filiere]);

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Assure-toi de modifier le mot de passe par défaut
            'sector' => $specialty, // Choix aléatoire parmi les spécialités de la filière choisie
            'admin' => $this->faker->boolean, // Définit si le professeur est un administrateur ou non
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
