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
    //    $elderlycare = Category::where('name','elderlycare')->first()->id;
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
                'label' => 'Asistentes'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Auxiliares'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Cuidadores'
            ],
            [
                'parent_id' => $eldercare,
                'label' => 'Atención Domiciliaria'
            ],

            //Cuidado de Mascotas

            [
                'parent_id' => $petcare,
                'label' => 'Veterinarios'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Paseadores'
            ],
            [
                'parent_id' => $petcare,
                'label' => 'Educadores Caninos'
            ],
            // [
            //     'parent_id' => $petcare,
            //     'label' => 'Cuidado a domicilio'
            // ],
            // [
            //     'parent_id' => $petcare,
            //     'label' => 'Cuidado en el domicilio del cuidador'
            // ],
            // [
            //     'parent_id' => $petcare,
            //     'label' => 'Guarderia canina'
            // ],

            //Servicios De limpieza

            [
                'parent_id' => $housekeeping,
                'label' => 'Limpiadoras/es'
            ],
            [
                'parent_id' => $housekeeping,
                'label' => 'Interinas'
            ],
            [
                'parent_id' => $housekeeping,
                'label' => 'Servicios de empresas'
            ],
            // [
            //     'parent_id' => $housekeeping,
            //     'label' => 'Arreglos básicos de costura'
            // ],

            // Servicios de Cocina

            [
                'parent_id' => $kitchen,
                'label' => 'Comida Casera'
            ],
            [
                'parent_id' => $kitchen,
                'label' => 'Cocineros'
            ],
            [
                'parent_id' => $kitchen,
                'label' => 'Catering'
            ],

            //Entrenamiento Personal a Domicilio

            [
                'parent_id' => $personalTraining,
                'label' => 'Yoga'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Pilates'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Personal Trainer'
            ],
            [
                'parent_id' => $personalTraining,
                'label' => 'Nutricionistas'
            ],

            //Atencion domiciliaria de sanitario y parasanitario

            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Medico'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Enfermero'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Acupuntor'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Naturópata'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Kinesiólogo'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Osteópata'
            // ],
            // [
            //     'parent_id' => $elderlycare,
            //     'label' => 'Fisioterapeuta Quiromasaje'
            // ],

            //Servicios de reparacion

            [
                'parent_id' => $repair,
                'label' => 'Informáticos'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Técnicos de Frigoríficos'
            ],
            [
                'parent_id' => $repair,
                'label' => 'Lavadoras'
            ],
            // [
            //     'parent_id' => $repair,
            //     'label' => 'Lavavajillas'
            // ],
            // [
            //     'parent_id' => $repair,
            //     'label' => 'otros'
            // ],

            //Jardines y piscinas

            [
                'parent_id' => $gardens,
                'label' => 'Jardineros'
            ],
            [
                'parent_id' => $gardens,
                'label' => 'Mantenimiento de piscina'
            ],
            [
                'parent_id' => $gardens,
                'label' => 'Podas'
            ],
            // [
            //     'parent_id' => $gardens,
            //     'label' => 'Cortar cesped'
            // ],

            //Servicios de peluqueria

            [
                'parent_id' => $hairdressing,
                'label' => 'Peluqueras/os'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Maquilladoras'
            ],
            [
                'parent_id' => $hairdressing,
                'label' => 'Esteticien'
            ],
            // [
            //     'parent_id' => $hairdressing,
            //     'label' => 'Manicura y Pedicura'
            // ],
            // [
            //     'parent_id' => $hairdressing,
            //     'label' => 'Maquillaje'
            // ],
            // [
            //     'parent_id' => $hairdressing,
            //     'label' => 'Depilación'
            // ],
            // [
            //     'parent_id' => $hairdressing,
            //     'label' => 'Peinar para fiestas'
            // ],
            // [
            //     'parent_id' => $hairdressing,
            //     'label' => 'Bodas'
            // ],

            //Mantenimiento

            [
                'parent_id' => $maintenance,
                'label' => 'Albañiles'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Fontaneros'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Carpinteros'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Gas'
            ],
            [
                'parent_id' => $maintenance,
                'label' => 'Electricista'
            ],
            // [
            //     'parent_id' => $maintenance,
            //     'label' => 'Limpieza de cristales'
            // ],

            // Ni;eras-Cuidados de ni;os

            [
                'parent_id' => $babySitter,
                'label' => 'Cuidadores de Bebes'
            ],

            [
                'parent_id' => $babySitter,
                'label' => 'Babysitter'
            ],

            [
                'parent_id' => $babySitter,
                'label' => 'Canguros'
            ],

            // [
            //     'parent_id' => $babySitter,
            //     'label' => 'Recoger a los niños del colegio'
            // ],

            //Profesores Particulares

            [
                'parent_id' => $tutoring,
                'label' => 'Matemáticas'
            ],
            [
                'parent_id' => $tutoring,
                'label' => 'Idiomas'
            ],
            [
                'parent_id' => $tutoring,
                'label' => 'Física'
            ],
            [
                'parent_id' => $tutoring,
                'label' => 'Química'
            ],
            [
                'parent_id' => $tutoring,
                'label' => 'Historia'
            ]
            
        ]);
    }
}
