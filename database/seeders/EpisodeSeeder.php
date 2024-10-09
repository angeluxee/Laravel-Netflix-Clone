<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Episode::create([
            'title' => 'Hola que tal',
            'number' => 1,
            'season' => 1,
            'sinopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'file' => 'storage/prueba.mp4',
            'serie_id' => 21, 
        ]);
        Episode::create([
            'title' => 'Hola que tal 2',
            'number' => 2,
            'season' => 1,
            'sinopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'file' => 'storage/prueba.mp4',
            'serie_id' => 21, 
        ]);
        Episode::create([
            'title' => 'Hola que tal 2',
            'number' => 3,
            'season' => 1,
            'sinopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'file' => 'storage/prueba.mp4',
            'serie_id' => 21, 
        ]);
        Episode::factory()->count(30)->create();

    }
}
