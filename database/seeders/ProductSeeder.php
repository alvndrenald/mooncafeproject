<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Chciken Oyakodon',
            'product_description' => 'Japanese Style Rice Bowl With Chicken and Egg',
            'product_price' => 58000,
            'product_image' => 'Chicken Oyakodon.jpg',
            'product_category_id' => 1
        ]);
        Product::create([
            'product_name' => 'Spaghetti Bolognese',
            'product_description' => 'Italian Style Pasta With Tomato Sauce With Beef Chunks',
            'product_price' => 41000,
            'product_image' => 'Spaghetti Bolognese.jpg',
            'product_category_id' => 1
        ]);
        Product::create([
            'product_name' => 'Crab And Corn Soup',
            'product_description' => 'Chinese Style Crab and Corn Soup',
            'product_price' => 29000,
            'product_image' => 'Crab and Corn Soup.jpg',
            'product_category_id' => 1
        ]);
        Product::create([
            'product_name' => 'Loaded Fries',
            'product_description' => 'French Fries With Beef Chunks, Gravy and Cheese',
            'product_price' => 32000,
            'product_image' => 'Loaded Fries.jpg',
            'product_category_id' => 1
        ]);
        Product::create([
            'product_name' => 'Caramel Macchiato',
            'product_description' => 'Single Shot Coffee With Milk and Caramel Drizzle',
            'product_price' => 32000,
            'product_image' => 'Caramel Macchiato.jpg',
            'product_category_id' => 1
        ]);

        Product::create([
            'product_name' => 'Beef Rice Bowl',
            'product_description' => 'Japanese Style Rice Bowl With Beef and Onion',
            'product_price' => 43000,
            'product_image' => 'Beef Rice Bowl.jpg',
            'product_category_id' => 2
        ]);
        Product::create([
            'product_name' => 'Chciken Oyakodon',
            'product_description' => 'Japanese Style Rice Bowl With Chicken and Egg',
            'product_price' => 58000,
            'product_image' => 'Chicken Oyakodon.jpg',
            'product_category_id' => 2
        ]);
        Product::create([
            'product_name' => 'Chciken Katsudon',
            'product_description' => 'Japanese Style Rice Bowl With Fried Chicken Fillet',
            'product_price' => 49000,
            'product_image' => 'Chicken Katsudon.jpg',
            'product_category_id' => 2
        ]);
        Product::create([
            'product_name' => 'Chicken Katsu Curry',
            'product_description' => 'Japanese Style Rice Bowl With Fried Chicken Fillet and Japanese Curry',
            'product_price' => 65000,
            'product_image' => 'Chicken Katsu Curry.jpg',
            'product_category_id' => 2
        ]);
        Product::create([
            'product_name' => 'Nasi Ayam Geprek',
            'product_description' => 'Ayam Geprek Rice Bowl With Sambal',
            'product_price' => 25000,
            'product_image' => 'Ayam Geprek.jpg',
            'product_category_id' => 2
        ]);

        Product::create([
            'product_name' => 'Shoyu Ramen',
            'product_description' => 'Japanese Noodle With Soy Based Soup',
            'product_price' => 38000,
            'product_image' => 'Shoyu Ramen.jpg',
            'product_category_id' => 3
        ]);
        Product::create([
            'product_name' => 'Miso Ramen',
            'product_description' => 'Japanese Noodle With Miso Based Soup',
            'product_price' => 35000,
            'product_image' => 'Miso Ramen.jpg',
            'product_category_id' => 3
        ]);
        Product::create([
            'product_name' => 'Bakmie Ayam',
            'product_description' => 'Noodle With Chicken',
            'product_price' => 20000,
            'product_image' => 'Bakmie Ayam.jpg',
            'product_category_id' => 3
        ]);
        Product::create([
            'product_name' => 'Spaghetti Carbonara',
            'product_description' => 'Italian Style Creamy Pasta With Chicken Or Beef Bacon',
            'product_price' => 43000,
            'product_image' => 'Spaghetti Carbonara.jpg',
            'product_category_id' => 3
        ]);
        Product::create([
            'product_name' => 'Spaghetti Bolognese',
            'product_description' => 'Italian Style Pasta With Tomato Sauce With Beef Chunks',
            'product_price' => 41000,
            'product_image' => 'Spaghetti Bolognese.jpg',
            'product_category_id' => 3
        ]);

        Product::create([
            'product_name' => 'Chicken Soup',
            'product_description' => 'Homemade Chicken Soup',
            'product_price' => 23000,
            'product_image' => 'Chicken Soup.jpg',
            'product_category_id' => 4
        ]);
        Product::create([
            'product_name' => 'Mushroom Cream Soup',
            'product_description' => 'Homemade Mushroom Cream Soup',
            'product_price' => 28000,
            'product_image' => 'Mushroom Cream Soup.jpg',
            'product_category_id' => 4
        ]);
        Product::create([
            'product_name' => 'French Onion Soup',
            'product_description' => 'French Style Slow Cooked Onion Soup With Garlic Bread',
            'product_price' => 32000,
            'product_image' => 'French Onion Soup.jpg',
            'product_category_id' => 4
        ]);
        Product::create([
            'product_name' => 'Crab And Corn Soup',
            'product_description' => 'Chinese Style Crab and Corn Soup',
            'product_price' => 29000,
            'product_image' => 'Crab and Corn Soup.jpg',
            'product_category_id' => 4
        ]);
        Product::create([
            'product_name' => 'Fish Soup',
            'product_description' => 'Homemade Snapper Fish Soup',
            'product_price' => 30000,
            'product_image' => 'Fish Soup.jpg',
            'product_category_id' => 4
        ]);

        Product::create([
            'product_name' => 'French Fries',
            'product_description' => 'Shoestring Cut Fried Potato',
            'product_price' => 22000,
            'product_image' => 'French Fries.jpg',
            'product_category_id' => 5
        ]);
        Product::create([
            'product_name' => 'Potato Wedges',
            'product_description' => 'Rustic Style Fried Potato',
            'product_price' => 25000,
            'product_image' => 'Potato Wedges.jpg',
            'product_category_id' => 5
        ]);
        Product::create([
            'product_name' => 'Singkong Goreng',
            'product_description' => 'Fried Cassava Served With Tomato and Chili Sauce',
            'product_price' => 15000,
            'product_image' => 'Singkong goreng.jpg',
            'product_category_id' => 5
        ]);
        Product::create([
            'product_name' => 'Loaded Fries',
            'product_description' => 'French Fries With Beef Chunks, Gravy and Cheese',
            'product_price' => 32000,
            'product_image' => 'Loaded Fries.jpg',
            'product_category_id' => 5
        ]);
        Product::create([
            'product_name' => 'Poutine',
            'product_description' => 'Canadian Style Loaded Fries With Gravy and Butter',
            'product_price' => 35000,
            'product_image' => 'Poutine.jpg',
            'product_category_id' => 5
        ]);

        Product::create([
            'product_name' => 'Espresso',
            'product_description' => 'Single Shot Coffee',
            'product_price' => 21000,
            'product_image' => 'Espresso.jpg',
            'product_category_id' => 6
        ]);
        Product::create([
            'product_name' => 'Latte',
            'product_description' => 'Single Shot Coffee With Milk',
            'product_price' => 25000,
            'product_image' => 'Latte.jpg',
            'product_category_id' => 6
        ]);
        Product::create([
            'product_name' => 'Caramel Macchiato',
            'product_description' => 'Single Shot Coffee With Milk and Caramel Drizzle',
            'product_price' => 32000,
            'product_image' => 'Caramel Macchiato.jpg',
            'product_category_id' => 6
        ]);
        Product::create([
            'product_name' => 'Affogato',
            'product_description' => 'Single Shot Coffee With Vanilla Ice Cream',
            'product_price' => 29000,
            'product_image' => 'Affogato.jpg',
            'product_category_id' => 6
        ]);
        Product::create([
            'product_name' => 'Irish Coffee',
            'product_description' => 'Single Shot Coffee With A Shot Of Baileys',
            'product_price' => 28000,
            'product_image' => 'Irish Coffee.jpg',
            'product_category_id' => 6
        ]);

        Product::create([
            'product_name' => 'Chocolate Milkshake',
            'product_description' => 'Chocolate Milk Blended With Chocolate Ice Cream',
            'product_price' => 24000,
            'product_image' => 'Chocolate Milkshake.jpg',
            'product_category_id' => 7
        ]);
        Product::create([
            'product_name' => 'Vanilla Milkshake',
            'product_description' => 'Plain Milk Blended With Vanilla Ice Cream',
            'product_price' => 22000,
            'product_image' => 'Vanilla Milkshake.jpg',
            'product_category_id' => 7
        ]);
        Product::create([
            'product_name' => 'Strawberry Milkshake',
            'product_description' => 'Strawberry Milk Blended With Strawberry Ice Cream',
            'product_price' => 25000,
            'product_image' => 'Strawberry Milkshake.jpg',
            'product_category_id' => 7
        ]);
        Product::create([
            'product_name' => 'Iced Tea',
            'product_description' => 'Iced Tea',
            'product_price' => 10000,
            'product_image' => 'Iced Tea.jpg',
            'product_category_id' => 7
        ]);
        Product::create([
            'product_name' => 'Iced Lemon Tea',
            'product_description' => 'Iced Tea With Lemon',
            'product_price' => 18000,
            'product_image' => 'Lemon Tea.jpg',
            'product_category_id' => 7
        ]);
    }
}
