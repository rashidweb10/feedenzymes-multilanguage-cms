<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Flours',
            'thumbnail_image' => 'dummy.jpg',
            'is_active' => true,
        ]);

        ProductCategory::create([
            'name' => 'Masale',
            'thumbnail_image' => 'dummy.jpg',
            'is_active' => true,
        ]);

        ProductCategory::create([
            'name' => 'Pickles',
            'thumbnail_image' => 'dummy.jpg',
            'is_active' => true,
        ]);
    }
}