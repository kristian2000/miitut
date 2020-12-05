<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 'eldercare',
                'label' => 'Cuidado de Mayores'
            ],
            [
                'id' => 'petcare',
                'label' => 'Cuidado de Mascotas'
            ],
            [
                'id' => 'housekeeping',
                'label' => 'Servicios de limpieza'
            ],
            [
                'id' => 'kitchen',
                'label' => 'Servicios de Cocina'
            ],
            [
                'id' => 'personalTraining',
                'label' => 'Entrenamiento personal a domicilio'
            ],
            [
                'id' => 'elderlycare',
                'label' => 'Atención domiciliaria'
            ],
            [
                'id' => 'repair',
                'label' => 'Servicios de Reparación'
            ],
            [
                'id' => 'gardens',
                'label' => 'Jardinería y piscinas'
            ],
            [
                'id' => 'hairdressing',
                'label' => 'Servicios de peluquería'
            ],
            [
                'id' => 'maintenance',
                'label' => 'Mantenimiento'
            ],
            [
                'id' => 'babySitter',
                'label' => 'Niñeras/Cuidado de niños'
            ],
            [
                'id' => 'tutoring',
                'label' => 'Profesores Particulares'
            ],
        ]);
    }
}
