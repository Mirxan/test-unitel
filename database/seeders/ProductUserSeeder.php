<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product\ProductUser;

class ProductUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductUser::factory(100)->create();
    }
}
