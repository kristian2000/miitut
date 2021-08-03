<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemConstant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_constants')->insert([
            [
                'type' => "commission",
                'name' => "commission_pay",
                'label' => "Comision al Pagar",
                "desc" => "Comision que se le cobra el empleador cuando realiza un pago.",
                "amount" => 0.06,
                "value" => null
            ],
            [
                'type' => "commission",
                'name' => "iva_pay",
                'label' => "Iva al Pagar",
                "desc" => "IVA que se le cobra el empleador cuando realiza un pago.",
                "amount" => 0.21,
                "value" => null
            ],
            [
                'type' => "commission",
                'name' => "commission_retirement",
                'label' => "Comision al Retirar",
                "desc" => "Comision que se le cobra el empleado al retirar un pago.",
                "amount" => 0.06,
                "value" => null
            ],
            [
                'type' => "bill",
                'name' => "name_bill",
                'label' => "Nombre Factura",
                "desc" => "Nombre que aparece en la factura.",
                "amount" => null,
                "value" => "Miguel Sanchez Pedreño"
            ],
            [
                'type' => "bill",
                'name' => "nif_bill",
                'label' => "NIF/CIF Factura",
                "desc" => "NIF/CIF que aparece en la factura.",
                "amount" => null,
                "value" => "48903276D"
            ],
            [
                'type' => "bill",
                'name' => "address_bill",
                'label' => "Direccion Factura",
                "desc" => "Direccion que aparece en la factura.",
                "amount" => null,
                "value" => "C/Almirante Fernandez Almeida 20 San Fernando, Cádiz, España"
            ]
        ]);
    }
}
