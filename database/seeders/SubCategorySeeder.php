<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([

            //Cuidado de mayores
            [
                'category_id' => 'eldercare',
                'label' => 'Compras'
            ],
            [
                'category_id' => 'eldercare',
                'label' => 'Paseos'
            ],
            [
                'category_id' => 'eldercare',
                'label' => 'Ayuda en el baño'
            ],
            [
                'category_id' => 'eldercare',
                'label' => 'Cuidado de Dia'
            ],
            [
                'category_id' => 'eldercare',
                'label' => 'Cuidado de Noche'
            ],

            //Cuidado de Mascotas

            [
                'category_id' => 'petcare',
                'label' => 'Veterinario'
            ],
            [
                'category_id' => 'petcare',
                'label' => 'Paseos'
            ],
            [
                'category_id' => 'petcare',
                'label' => 'Visitar/Alimentar'
            ],
            [
                'category_id' => 'petcare',
                'label' => 'Cuidado a domicilio'
            ],
            [
                'category_id' => 'petcare',
                'label' => 'Cuidado en el domicilio del cuidador'
            ],
            [
                'category_id' => 'petcare',
                'label' => 'Guarderia canina'
            ],

            //Servicios De limpieza

            [
                'category_id' => 'housekeeping',
                'label' => 'Limpiar la casa'
            ],
            [
                'category_id' => 'housekeeping',
                'label' => 'Limpieza de Oficinas'
            ],
            [
                'category_id' => 'housekeeping',
                'label' => 'Lavar y planchar la ropa'
            ],
            [
                'category_id' => 'housekeeping',
                'label' => 'Arreglos básicos de costura'
            ],

            // Servicios de Cocina

            [
                'category_id' => 'kitchen',
                'label' => 'Comida casera a domicilio'
            ],
            [
                'category_id' => 'kitchen',
                'label' => 'Cocinero a domicilio'
            ],
            [
                'category_id' => 'kitchen',
                'label' => 'Catering'
            ],

            //Entrenamiento Personal a Domicilio

            [
                'category_id' => 'personalTraining',
                'label' => 'Asesoramiento nutricional – Dietista'
            ],
            [
                'category_id' => 'personalTraining',
                'label' => 'Entrenador personal – Cardiovascular, Tonificación'
            ],
            [
                'category_id' => 'personalTraining',
                'label' => 'Monitor de Pilates'
            ],
            [
                'category_id' => 'personalTraining',
                'label' => 'Monitor de Yoga'
            ],

            //Atencion domiciliaria de sanitario y parasanitario

            [
                'category_id' => 'elderlycare',
                'label' => 'Medico'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Enfermero'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Acupuntor'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Naturópata'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Kinesiólogo'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Osteópata'
            ],
            [
                'category_id' => 'elderlycare',
                'label' => 'Fisioterapeuta Quiromasaje'
            ],

            //Servicios de reparacion

            [
                'category_id' => 'repair',
                'label' => 'Ordenadores'
            ],
            [
                'category_id' => 'repair',
                'label' => 'Televisores'
            ],
            [
                'category_id' => 'repair',
                'label' => 'Frigoríficos'
            ],
            [
                'category_id' => 'repair',
                'label' => 'Lavadoras'
            ],
            [
                'category_id' => 'repair',
                'label' => 'Lavavajillas'
            ],
            [
                'category_id' => 'repair',
                'label' => 'otros'
            ],

            //Jardines y piscinas

            [
                'category_id' => 'gardens',
                'label' => 'Mantener la piscina'
            ],
            [
                'category_id' => 'gardens',
                'label' => 'Mantener el jardín'
            ],
            [
                'category_id' => 'gardens',
                'label' => 'Podar árboles'
            ],
            [
                'category_id' => 'gardens',
                'label' => 'Cortar cesped'
            ],

            //Servicios de peluqueria

            [
                'category_id' => 'hairdressing',
                'label' => 'Lavar y peinar'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Cortar el pelo'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Tinte y mechas'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Manicura y Pedicura'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Maquillaje'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Depilación'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Peinar para fiestas'
            ],
            [
                'category_id' => 'hairdressing',
                'label' => 'Bodas'
            ],

            //Mantenimiento

            [
                'category_id' => 'maintenance',
                'label' => 'Electricidad'
            ],
            [
                'category_id' => 'maintenance',
                'label' => 'Fontanería/Gas'
            ],
            [
                'category_id' => 'maintenance',
                'label' => 'Albañilería'
            ],
            [
                'category_id' => 'maintenance',
                'label' => 'Pintura'
            ],
            [
                'category_id' => 'maintenance',
                'label' => 'Carpintería'
            ],
            [
                'category_id' => 'maintenance',
                'label' => 'Limpieza de cristales'
            ],

            // Ni;eras-Cuidados de ni;os

            [
                'category_id' => 'babySitter',
                'label' => 'Ayudar con los deberes'
            ],

            [
                'category_id' => 'babySitter',
                'label' => 'Cuidado a tiempo completo - Interna'
            ],

            [
                'category_id' => 'babySitter',
                'label' => 'Ocasional'
            ],

            [
                'category_id' => 'babySitter',
                'label' => 'Recoger a los niños del colegio'
            ],

            //Profesores Particulares

            [
                'category_id' => 'tutoring',
                'label' => 'Profesores Particulares'
            ],
        ]);
    }
}
