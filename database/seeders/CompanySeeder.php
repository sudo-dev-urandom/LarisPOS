<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $companies = [
            [
                'id' => Str::uuid(),
                'email' => 'admin@clovertech.com',
                'name' => 'CloverTech Solutions',
                'is_active' => true,
                'is_verified' => true,
                'type' => 'Technology',
                'logo' => 'https://via.placeholder.com/150',
                'address' => '123 Silicon Valley',
                'subs_price' => 499.99,
                'subs_type' => 'monthly',
                'revenue' => 100000.00,
            ],
            [
                'id' => Str::uuid(),
                'email' => 'sales@fruitmart.com',
                'name' => 'FruitMart Inc.',
                'is_active' => true,
                'is_verified' => false,
                'type' => 'Retail',
                'logo' => 'https://via.placeholder.com/150',
                'address' => '456 Market Street',
                'subs_price' => 299.00,
                'subs_type' => 'yearly',
                'revenue' => 75000.50,
            ]
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
