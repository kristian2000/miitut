<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            [
                'name' => 'pending',
                'label' => 'Pendiente'
            ],
            [
                'name' => 'active',
                'label' => 'Activo'
            ],
            [
                'name' => 'locked',
                'label' => 'Bloqueado'
            ],
            [
                'name' => 'pause',
                'label' => 'Pausado'
            ],
            [
                'name' => 'accept',
                'label' => 'Aceptado'
            ],
            [
                'name' => 'reject',
                'label' => 'Rechazado'
            ],
            [
                'name' => 'process',
                'label' => 'En Proceso'
            ],
            [
                'name' => 'pendingPayment',
                'label' => 'Pendiente de Pago'
            ],
            [
                'name' => 'paidOut',
                'label' => 'Pagado'
            ],
            [
                'name' => 'finalized',
                'label' => 'Finalizado'
            ],
            [
                'name' => 'mediation',
                'label' => 'En Mediacion'
            ]
        ]);
    }
}
