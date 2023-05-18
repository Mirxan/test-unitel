<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProductUserSeeder;

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
            ProductSeeder::class,
            ProductUserSeeder::class,
        ]);
    }
}
