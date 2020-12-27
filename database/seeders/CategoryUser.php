<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_user')->insert([

            // Usuarios Empleados
            [
                'user_id' => 1,
                'category_id' => 1,
                'status_id' => 2,
                'price' => 10,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'experiencia en aprendizaje',
                'yearExperience' => 0,
                'address' => 'Direccion Test, Estado, 0000, Pais',
                'lat' => '8.59185',
                'lng' => '-71.13831'
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'status_id' => 2,
                'price' => 3,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'nada de experiencia',
                'yearExperience' => 0,
                'address' => 'Direccion Test, Estado, 0000, Pais',
                'lat' => '8.59083',
                'lng' => '-71.16281'
            ],
            [
                'user_id' => 3,
                'category_id' => 3,
                'status_id' => 2,
                'price' => 8,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'poca experiencia',
                'yearExperience' => 1,
                'address' => 'Direccion Test, Estado, 0000, Pais',
                'lat' => '8.61043',
                'lng' => '-71.13979'
            ],
            [
                'user_id' => 4,
                'category_id' => 4,
                'status_id' => 2,
                'price' => 1,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'mucha experience',
                'yearExperience' => 2,
                'address' => 'Direccion Test, Estado, 0000, Pais',
                'lat' => '8.58552',
                'lng' => '-71.15829'
            ]
        ]);
    }
}
