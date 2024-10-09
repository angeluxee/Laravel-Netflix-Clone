<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // static $number = 1;
        // static $season = 1;

        // if ($number > 1 && ($number) % 30 === 1) {
        //     $season++;
        // }
        
        // $episodeNumber = $number++;

        return [
            'title' => $this->faker->sentence,
            'number' => $this->faker->numberBetween(1, 12),
            'season' => $this->faker->numberBetween(1, 100),
            'sinopsis' => $this->faker->paragraph, 
            'file' => '/storage/prueba.mp4',
            'serie_id' => 22, 

        ];
    }
}
