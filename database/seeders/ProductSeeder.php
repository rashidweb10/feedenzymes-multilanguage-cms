<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ProductCategory::all();

        foreach ($categories as $category) {
            Product::create([
                'name' => 'Sample Product for ' . $category->name,
                'image' => '/storage/images/26iEbRpPjDsib3cFWIrD035pxowQfkzds6uvGbvD.jpg',
                'category_id' => $category->id,
                'variation' => '[{"1 Kg":"100"},{"2Kg":"200"}]',
                'is_active' => true,
            ]);
        }
    }
}