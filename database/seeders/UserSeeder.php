<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'dtriano',
            'name' => 'Dan',
            'surname' => 'Triano',
            'email' => 'dtriano@gmail.com',
            'password' => '123', 
            'dob' => '05/05/02',
            'rol' => 'admin',
            'membership' => TRUE,
            'phoneNumber' => 666666665,
            'avatar' => '/storage/avatars/ositoMamado.jpg',
        ]);
        User::create([
            'username' => 'ManpreetMustafita4',
            'name' => 'Manpreet',
            'surname' => 'Mustafi',
            'email' => 'admin@gmail.com',
            'password' => '123', 
            'dob' => '05/05/02',
            'rol' => 'admin',
            'membership' => TRUE,
            'phoneNumber' => 666666666,
            'avatar' => '/storage/avatars/default.webp',
        ]);
        User::create([
            'username' => 'Angeluxe',
            'name' => 'Angel',
            'surname' => 'Camuña',
            'email' => 'angel@gmail.com',
            'password' => '123', 
            'dob' => '05/05/02',
            'rol' => 'user',
            'membership' => TRUE,
            'phoneNumber' => 666666665,
            'avatar' => '/storage/avatars/default.webp',
        ]);
        User::create([
            'username' => 'JordiBergallo',
            'name' => 'Jordi',
            'surname' => 'Bargallo',
            'email' => 'jordi@gmail.com',
            'password' => '123', 
            'dob' => '05/05/02',
            'rol' => 'user',
            'membership' => TRUE,
            'phoneNumber' => 666666664,
            'avatar' => '/storage/avatars/default.webp',
        ]);
        User::create([
            'username' => 'Tomamás',
            'name' => 'Tomás',
            'surname' => 'Apellido',
            'email' => 'tomas@gmail.com',
            'password' => '123', 
            'dob' => '05/05/02',
            'rol' => 'user',
            'membership' => TRUE,
            'phoneNumber' => 666666663,
            'avatar' => '/storage/avatars/default.webp',
        ]);
    }
}
