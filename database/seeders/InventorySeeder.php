<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['meat', 'burger', 'pizza', 'drinks', 'dessert', 'snacks'];

        for ($i = 1; $i <= 17; $i++) {
            Inventory::create([
                'name' => 'Product ' . $i,
                'tags' => $categories[array_rand($categories)],
                'price' => mt_rand(100000, 10000000) / 100, // 10.00 to 1000.00
                'is_available' => rand(0, 1),
                'description' => 'Description for Product ' . $i,
                'stocks' => rand(5, 100),
                'images' => '/assets/img/pos/product-' . $i . '.jpg',
                'discount' => mt_rand(0, 50),
            ]);
        }
    }
}
