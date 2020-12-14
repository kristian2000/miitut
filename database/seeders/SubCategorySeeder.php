<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $eldercare = Category::where('name','eldercare')->first()->id;
       $petcare = Category::where('name','petcare')->first()->id;
       $housekeeping = Category::where('name','housekeeping')->first()->id;
       $kitchen = Category::where('name','kitchen')->first()->id;
       $personalTraining = Category::where('name','personalTraining')->first()->id;
       $elderlycare = Category::where('name','elderlycare')->first()->id;
       $repair = Category::where('name','repair')->first()->id;
       $gardens = Category::where('name','gardens')->first()->id;
       $hairdressing = Category::where('name','hairdressing')->first()->id;
       $maintenance = Category::where('name','maintenance')->first()->id;
       $babySitter = Category::where('name','babySitter')->first()->id;
       $tutoring  = Category::where('name','tutoring')->first()->id;

        DB::table('categories')->insert([

            //Cuidado de mayores
            [
                'parent_id' => $eldercare,
                'label' => 'Compras'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Paseos'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Ayuda en el baño'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Cuidado de Dia'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Cuidado de Noche'
            ],

            //Cuidado de Mascotas

            [
                'parent_id' => $petcare,
                'label' => 'Veterinario'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Paseos'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Visitar/Alimentar'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Cuidado a domicilio'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Cuidado en el domicilio del cuidador'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Guarderia canina'
            ],

            //Servicios De limpieza

            [
                'parent_id' => $housekeeping,
                'label' => 'Limpiar la casa'
            ],
            [
                'parent_id' => $housekeeping,
                'label' => 'Limpieza de Oficinas'
            ],
            [
                'parent_id' => $housekeeping,
                'label' => 'Lavar y planchar la ropa'
            ],
            [
                'parent_id' => $housekeeping,
                'label' => 'Arreglos básicos de costura'
            ],

            // Servicios de Cocina

            [
                'parent_id' => $kitchen,
                'label' => 'Comida casera a domicilio'
            ],
            [
                'parent_id' => $kitchen,
                'label' => 'Cocinero a domicilio'
            ],
            [
                'parent_id' => $kitchen,
                'label' => 'Catering'
            ],

            //Entrenamiento Personal a Domicilio

            [
                'parent_id' => $personalTraining,
                'label' => 'Asesoramiento nutricional – Dietista'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Entrenador personal – Cardiovascular, Tonificación'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Monitor de Pilates'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Monitor de Yoga'
            ],

            //Atencion domiciliaria de sanitario y parasanitario

            [
                'parent_id' => $elderlycare,
                'label' => 'Medico'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Enfermero'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Acupuntor'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Naturópata'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Kinesiólogo'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Osteópata'
            ],
            [
                'parent_id' => $elderlycare,
                'label' => 'Fisioterapeuta Quiromasaje'
            ],

            //Servicios de reparacion

            [
                'parent_id' => $repair,
                'label' => 'Ordenadores'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Televisores'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Frigoríficos'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Lavadoras'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Lavavajillas'
            ],
            [
                'parent_id' => $repair,
                'label' => 'otros'
            ],

            //Jardines y piscinas

            [
                'parent_id' => $gardens,
                'label' => 'Mantener la piscina'
            ],
            [
                'parent_id' => $gardens,
                'label' => 'Mantener el jardín'
            ],
            [
                'parent_id' => $gardens,
                'label' => 'Podar árboles'
            ],
            [
                'parent_id' => $gardens,
                'label' => 'Cortar cesped'
            ],

            //Servicios de peluqueria

            [
                'parent_id' => $hairdressing,
                'label' => 'Lavar y peinar'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Cortar el pelo'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Tinte y mechas'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Manicura y Pedicura'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Maquillaje'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Depilación'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Peinar para fiestas'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Bodas'
            ],

            //Mantenimiento

            [
                'parent_id' => $maintenance,
                'label' => 'Electricidad'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Fontanería/Gas'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Albañilería'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Pintura'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Carpintería'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Limpieza de cristales'
            ],

            // Ni;eras-Cuidados de ni;os

            [
                'parent_id' => $babySitter,
                'label' => 'Ayudar con los deberes'
            ],

            [
                'parent_id' => $babySitter,
                'label' => 'Cuidado a tiempo completo - Interna'
            ],

            [
                'parent_id' => $babySitter,
                'label' => 'Ocasional'
            ],

            [
                'parent_id' => $babySitter,
                'label' => 'Recoger a los niños del colegio'
            ],

            //Profesores Particulares

            [
                'parent_id' => $tutoring,
                'label' => 'Profesores Particulares'
            ],
        ]);
    }
}
