<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'sinopsis' => $this->faker->paragraph,
            'year' => $this->faker->numberBetween(1980, 2024),
            'director' => $this->faker->name,
            'cast' => $this->faker->name . ', ' . $this->faker->name . ', ' . $this->faker->name,
            'type' => $this->faker->randomElement(['serie', 'movie']),
            'genre' => $this->faker->randomElement(['Acción', 'Comedia']),
            'poster' => '/storage/posters/deadpool_poster.png', 
            'file' => 'pruebas.mp4', 
        ];
    }
}
