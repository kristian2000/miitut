<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'admin'
            ],

            // Usuarios Empleados
            [
                'name' => Str::random(6),
                'email' => 'usuario1@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'work'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario2@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'work'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario3@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'work'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario4@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'work'
            ],

            // Usuarios Empleadores
            [
                'name' => Str::random(6),
                'email' => 'usuario5@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'help'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario6@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'help'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario7@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'help'
            ],
            [
                'name' => Str::random(6),
                'email' => 'usuario8@test.com',
                'password' => Hash::make('test12'),
                'userType' => 'help'
            ]
        ]);

    }
}
