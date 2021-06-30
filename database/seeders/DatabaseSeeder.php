<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $product = Product::create([
           'name'=>'T-shirt'
        ]);

        $option1 = Option::create([
            'name'=>'Size',
        ]);
        $option2 = Option::create([
            'name'=>'Color'
        ]);
    }
}
