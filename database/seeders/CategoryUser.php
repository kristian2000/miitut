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

            // Empleados Venezuela - Mérida
            [
                'user_id' => 8,
                'category_id' => 1,
                'status_id' => 2,
                'price' => 10,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'experiencia en aprendizaje',
                'yearExperience' => 0,
                'address' => "Parroquia El Sagrario, Municipio Libertador, Mérida, 5115, Venezuela",
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
                'address' => "Residencias El Rodeo, Santa Bárbara, Parroquia Mariano Picon Salas, Municipio Libertador, Mérida, 5115, Venezuela",
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
                'address' => "Hoyada de Milla, Sector La Milagrosa, Parroquia Milla, Municipio Libertador, Mérida, 5115, Venezuela",
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
                'address' => "Carianna Eventos, Av. Gonzálo Picón, Mérida, Parroquia El Llano, Municipio Libertador, Mérida, 5115, Venezuela",
                'lat' => '8.58552',
                'lng' => '-71.15829'
            ],

            // Empleados España - Andalucia
            [
                'user_id' => 8,
                'category_id' => 1,
                'status_id' => 2,
                'price' => 10,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'experiencia en aprendizaje',
                'yearExperience' => 0,
                'address' => "Calle San Bruno, San Fernando, Bahía de Cádiz, Cádiz, Andalucía, 11100, España",
                'lat' => '36.46',
                'lng' => '-6.20'
            ],
            [
                'user_id' => 2,
                'category_id' => 3,
                'status_id' => 2,
                'price' => 3,
                'title' => 'Titulo Informativo',
                'description' => 'Description Example full good.',
                'descriptionExperience' => 'nada de experiencia',
                'yearExperience' => 0,
                'address' => "Iglesia Mayor de San Pedro y San Pablo, Calle Pérez Galdós, San Fernando, Bahía de Cádiz, Cádiz, Andalucía, 11100, España",
                'lat' => '36.46569',
                'lng' => '-6.19540'
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
                'address' => "Pabellón de deportes, Calle Magallanes, San Fernando, Bahía de Cádiz, Cádiz, Andalucía, 11100, España",
                'lat' => '36.47707',
                'lng' => '-6.19843'
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
                'address' => "A.P. Puente de Hierro, Carretera de La Carraca, San Fernando, Bahía de Cádiz, Cádiz, Andalucía, 11100, España",
                'lat' => '36.48395',
                'lng' => '-6.17847'
            ]

        ]);
    }
}
