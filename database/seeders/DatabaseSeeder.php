<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\CategoryUser;
use Database\Seeders\SystemConstant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            StatusSeeder::class,
            SystemConstant::class
            // CategoryUser::class,
            // MembershipSeeder::class
        ]);
    }
}
