<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

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
            'category_name' => 'Best Seller',
        ]);

        ProductCategory::create([
            'category_name' => 'Rice',
        ]);

        ProductCategory::create([
            'category_name' => 'Noodle',
        ]);

        ProductCategory::create([
            'category_name' => 'Soup',
        ]);

        ProductCategory::create([
            'category_name' => 'Snack',
        ]);

        ProductCategory::create([
            'category_name' => 'Coffee',
        ]);

        ProductCategory::create([
            'category_name' => 'Non-Coffee',
        ]);
    }
}
