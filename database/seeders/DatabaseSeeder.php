<?php

namespace Database\Seeders;

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
        $product1 = Product::create([
            'name' => 'Producte 1',
            'description' => 'bla bla bla 1',
            'price' => '50',
            'image' => 'https://lorempixel.com/400/200/fashion/1',
        ]);
        $product2 = Product::create([
            'name' => 'Producte 2',
            'description' => 'bla bla bla 2',
            'price' => '30',
            'image' => 'https://lorempixel.com/400/200/fashion/4',
        ]);
        $product3 = Product::create([
            'name' => 'Producte 3',
            'description' => 'bla bla bla 3',
            'price' => '69',
            'image' => 'https://lorempixel.com/400/200/sports/3',
        ]);
    }
}
