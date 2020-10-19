<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'category_slug' => "-",
            'category_image' => "cat1.jpg",
            'category_name' => "নলেন গুড়"
        ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "কাটার  মেশিন"
         ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => " ফিড মেশিন"
         ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "রাইচ মিল"
         ]);
      /*   \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "সাধারণ পাটালি"
         ]);

         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "নারকেল পাটালি"
         ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "মুছি পাটালি"
         ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "গুড়ের সন্দেশ"
         ]);
         \App\Category::create([
             'category_slug' => "-",
             'category_image' => "cat1.jpg",
             'category_name' => "দানা গুড়"
         ]);*/
    }
}
