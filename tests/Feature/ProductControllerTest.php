<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guest_users_can_index_products()
    {

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

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('products.index');

        $products = [$product1,$product2,$product3];

        foreach ($products as $product) {
            $response->assertSeeText($product->name);
            $response->assertSeeText($product->description);
            $response->assertSeeText($product->price);
            $response->assertSee($product->image,false);
        }

    }

    public function test_guest_users_can_show_a_product()
    {
        $product = Product::create([
            'name' => 'Producte 1',
            'description' => 'bla bla bla 1',
            'price' => '50',
            'image' => 'https://lorempixel.com/400/200/fashion/1',
        ]);

        $response = $this->get('/products/' . $product->id);

        $response->assertStatus(200);
        $response->assertViewIs('products.show');

        $response->assertSeeText($product->name);
        $response->assertSeeText($product->description);
        $response->assertSeeText($product->price);
        $response->assertSee($product->image,false);

    }
}
