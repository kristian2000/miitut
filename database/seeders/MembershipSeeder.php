<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memberships')->insert([
            [
                'label' => '1 mes',
                'price' => 1.95,
                'period' => 'mes',
                'userType' => 'work'
            ],
            [
                'label' => '3 mes',
                'price' => 4.95,
                'period' => 'mes',
                'userType' => 'work'
            ],
            [
                'label' => '1 año',
                'price' => 2.95,
                'period' => 'mes',
                'userType' => 'work'
            ]
        ]);
    }
}
