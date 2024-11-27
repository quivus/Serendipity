<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_items')->insert([

            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],

            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ],
            [
                'product_id' => Str::random(10),
                'name' => Str::random(10),
                'price' => rand(10, 100),
                'category' => 'Coffee',
                'description' => Str::random(10),
                'image' => '',
            ]

        ]);
    }
}
