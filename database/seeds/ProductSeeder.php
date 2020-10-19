<?php

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
        \App\Product::create([
            'product_name' => "ঘাস, খড় ও ভুট্টা গাছ কাটার মেশিন",
            'regular_price' => "32000",
            'selling_price' => "28000",
            'brand_id' => "1",
            'featured_image' => "1.png",
            'product_category_id' => "2",
            'featured_product' => true,

        ]);
        \App\Product::create([
            'product_name' => "গম-ভুট্টা ভাঙ্গা মেশিন",
            'regular_price' => "50000",
            'selling_price' => "45000",
            'brand_id' => "1",
            'featured_image' => "2.png",
            'product_category_id' => "2",
            'featured_product' => true,

        ]);
        \App\Product::create([
            'product_name' => "পোল্ট্রি/মাছ ফিড মেশিন",
            'regular_price' => "50000",
            'selling_price' => "45000",
            'brand_id' => "1",
            'featured_image' => "3.png",
            'product_category_id' => "3",
            'featured_product' => true,


        ]);
        \App\Product::create([
            'product_name' => "মিনি কম্বাইন্ড রাইচ মিল",
            'regular_price' => "50000",
            'selling_price' => "45000",
            'brand_id' => "1",
            'featured_image' => "4.png",
            'product_category_id' => "4",

        ]);
    }
}
