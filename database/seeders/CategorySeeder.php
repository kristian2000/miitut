<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

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
                'name' => 'eldercare',
                'label' => 'Cuidado de Mayores'
            ],
            [
                'name' => 'petcare',
                'label' => 'Cuidado de Mascotas'
            ],
            [
                'name' => 'housekeeping',
                'label' => 'Servicios de limpieza'
            ],
            [
                'name' => 'kitchen',
                'label' => 'Servicios de Cocina'
            ],
            [
                'name' => 'personalTraining',
                'label' => 'Entrenamiento personal a domicilio'
            ],
            [
                'name' => 'elderlycare',
                'label' => 'Atención domiciliaria'
            ],
            [
                'name' => 'repair',
                'label' => 'Servicios de Reparación'
            ],
            [
                'name' => 'gardens',
                'label' => 'Jardinería y piscinas'
            ],
            [
                'name' => 'hairdressing',
                'label' => 'Servicios de peluquería'
            ],
            [
                'name' => 'maintenance',
                'label' => 'Mantenimiento'
            ],
            [
                'name' => 'babySitter',
                'label' => 'Cuidado de niños'
            ],
            [
                'name' => 'tutoring',
                'label' => 'Profesores Particulares'
            ],
        ]);


    }
}
